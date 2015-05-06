<?php

namespace Tecnospeed;

use Tecnospeed\Assets\Rps\Send\ArrayToTx2;
use Tecnospeed\Assets\SendParams;
use Zend\Stdlib\Hydrator\ClassMethods;
use Tecnospeed\HttpClient\TecnospeedApi;


class NF
{

    public $entity;
    public $entityManager = 'Tecnospeed\Entity\Send';
    public $config;
    public $hydratorClass;
    public $hydrator;
    public $configuration;
    public $cities;

    public function __construct($entityManager = null)
    {
        if (!is_null($entityManager)) {
            $this->entityManager = $entityManager;
        }

        if (!class_exists($this->entityManager)) {
            throw new \InvalidArgumentException('Class do not exist');
        }

        $this->configuration = include __DIR__ . '/Config/Configuration.php';
        $this->cities        = include __DIR__ . '/Config/Cities.php';
    }

    /**
     * @param array $content
     * @return mixed
     */
    public function content($content = array())
    {
        try {
            if (empty($content)) {
                throw new \InvalidArgumentException('Empty array');
            }

            $haveDifferences = array_diff_key($content, SendParams::params());
            if (!empty($haveDifferences)) {
                throw new \InvalidArgumentException(sprintf("Invalid Arguments", var_dump($haveDifferences)));
            }

            $this->entity = new $this->entityManager;

            $this->hydrator = new ClassMethods();

            $this->hydrator->hydrate($content, $this->entity);

            $this->entity->setVersao($this->cities[$this->entity->getCpfCnpjRemetente()]['versao']);
            $this->entity->setNomeCidade($this->cities[$this->entity->getCpfCnpjRemetente()]['grupo']);

            return $this->entity;
        } catch (Exception $e) {
            echo $e;
        }

    }




    public function sendWithSocket($content = array())
    {

        if (!empty($content)) {
            $this->content($content);
        }

        $stringTx2 = new ArrayToTx2();
        $arrayNfse = $this->hydrator->extract($this->entity);

        $stringTx2->convertToString($arrayNfse);
        $tx2 = utf8_decode($stringTx2->getTx2());


        $post_data['grupo'] = $this->cities[$arrayNfse['cpf_cnpj_remetente']]['grupo'];
        $post_data['cnpj'] =  $this->cities[$arrayNfse['cpf_cnpj_remetente']]['CNPJ'];


        /**
         * Descarta as notas REJEITADAS antes de enviar conforme cidade parametrizadas no arquivo Config\Cities.php
         * parametro -> ExcludeAfterSend.
         */
        if( $this->cities[$arrayNfse['cpf_cnpj_remetente']]['ExcludeAfterSend'] ) {
                $this->discardAfterSend( $post_data['cnpj'] );
        }

        $post_data['arquivo'] = $tx2;

        $host = $this->configuration['url'];
        $port = $this->configuration['port'];

        $data = http_build_query($post_data);

        $usuario = $this->configuration['usuario'];
        $senha = $this->configuration['senha'];

        $auth = base64_encode("$usuario:$senha");

        $socket = fsockopen($host, $port, $errno, $errstr, 15);

        if (!$socket) {
            throw new \Exception('Erro ao conectar no manager.<br>');
        }

        $http = "POST /ManagerAPIWeb/nfse/envia HTTP/1.1\r\n";
        $http .= "Authorization: Basic " . $auth . "\r\n";
        $http .= "Host: " . $host . ":8081\r\n";
        $http .= "User-Agent: " . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
        $http .= "Content-Type: application/x-www-form-urlencoded\r\n";
        $http .= "Content-length: " . strlen($data) . "\r\n";
        $http .= "Connection: close\r\n\r\n";
        $http .= $data . "\r\n\r\n";
        fwrite($socket, $http);

        $result = "";

        //Lê todas as linhas do retorno
        while (!feof($socket)) {
            $result .= fgets($socket, 4096);
        }
        fclose($socket);

        //Separa header do conteudo
        list($header, $body) = preg_split("/\R\R/", $result, 2);

        return $body;
    }

    /**
     * @param $cnpjToDiscard
     * @return $this
     * Descarta as notas rejeitadas.
     */
    private function discardAfterSend($cnpjToDiscard)
    {
        $api = new TecnospeedApi();
        $api->descartaNf($cnpjToDiscard);
        return $this;
    }

}

