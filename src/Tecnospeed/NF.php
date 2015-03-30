<?php

namespace Tecnospeed;

use Tecnospeed\Assets\Rps\Send\ArrayToTx2;
use Tecnospeed\Assets\SendParams;
use Tecnospeed\HttpClient\TecnospeedCurlHttpClient;
use Zend\Stdlib\Hydrator\ClassMethods;


class NF {

    public $entity;
    public $entityManager = 'Tecnospeed\Entity\Send';
    public $config;
    public $hydratorClass;
    public $hydrator;
    public $configuration;

    public function __construct($entityManager = null)
    {
        if (!is_null($entityManager)) {
            $this->entityManager = $entityManager;
        }

        if (!class_exists($this->entityManager)) {
            throw new \InvalidArgumentException('Class do not exist');
        }

        $this->configuration = include __DIR__.'\Config\Configuration.php';
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
                throw new \InvalidArgumentException(sprintf("Invalid Arguments"));
            }

            $this->entity = new $this->entityManager;

            $this->hydrator = new ClassMethods();

            $this->hydrator->hydrate($content, $this->entity);

            return $this->entity;
        }catch (Exception $e){
            echo $e;
        }

    }
    
    public function sendWithSocket($content = array())
    {

        if ( ! empty($content)) {
            $this->content($content);
        }

        $stringTx2 = new ArrayToTx2();
        $stringTx2->convertToString($this->hydrator->extract($this->entity));
        $tx2 = utf8_decode($stringTx2->getTx2());
        $post_data['grupo']= $this->configuration['grupo'];
        $post_data['cnpj']= $this->configuration['CNPJ'];
        $post_data['arquivo']= $tx2;

        $host = $this->configuration['url'];
        $port = $this->configuration['port'];

        $data=http_build_query($post_data);

        $usuario = $this->configuration['usuario'];
        $senha = $this->configuration['senha'];

        $auth = base64_encode("$usuario:$senha");

        $socket = fsockopen($host, $port, $errno, $errstr, 15);

        $http  = "POST /ManagerAPIWeb/nfse/envia HTTP/1.1\r\n";
        $http .= "Authorization: Basic ".$auth."\r\n";
        $http .= "Host: ".$host.":8081\r\n";
        $http .= "User-Agent: " . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
        $http .= "Content-Type: application/x-www-form-urlencoded\r\n";
        $http .= "Content-length: " . strlen($data) . "\r\n";
        $http .= "Connection: close\r\n\r\n";
        $http .= $data."\r\n\r\n";
        fwrite($socket, $http);

        $result="";

        //Lê todas as linhas do retorno
        while (!feof($socket))
        {
            $result .= fgets($socket, 4096);
        }
        fclose($socket);

        //Separa header do conteudo
        list($header, $body) = preg_split("/\R\R/", $result, 2);

        return $body;
    }


    /**
     * @todo não esta funcionando na prática
     * @param array $content
     * @return string
     */
    public function send($content = array())
    {
        if ( ! empty($content)) {
            $this->content($content);
        }

        $url = $this->configuration['url'].":".$this->configuration['port'].'/ManagerAPIWeb/nfse/envia ';

        $method = 'POST';

        $stringTx2 = new ArrayToTx2();
        $stringTx2->convertToString($this->hydrator->extract($this->entity));


        $parameters = array(
            'CNPJ'=>$this->configuration['CNPJ'],
            'grupo'=>$this->configuration['grupo'],
            'arquivo'=>$stringTx2->getTx2(),
        );

        $encoded = base64_encode("{$this->configuration['usuario']}:{$this->configuration['senha']}");

        $authorization = "Basic {$encoded}";

        $send = new TecnospeedCurlHttpClient();

        $send->addRequestHeader('Authorization',$authorization);
        $send->addRequestHeader('Host',$this->configuration['url']);
        //$send->addRequestHeader('User-Agent',$_SERVER['HTTP_USER_AGENT']);
        $send->addRequestHeader('Content-Type','application/x-www-form-urlencoded');
        $send->addRequestHeader('Content-Length',strlen(http_build_query($parameters)));
        $send->addRequestHeader('Connection','close');

        return $send->send($url, $method, $parameters);

    }

    public function find($data = array())
    {
        $cnpj = $this->configuration['CNPJ'];
        if ( isset($data['CNPJ'])) {
            $cnpj = $data['CNPJ'];
        }

        $grupo = $this->configuration['grupo'];
        if (isset($data['grupo'])) {
            $grupo = $data['grupo'];
        }

        if ( is_array($data['campos'])) {
            throw new \Exception(sprintf('Expected index "%s" an array','campos'));
        }

        $campos = strtolower(implode(',',$data['campos']));

        $limite = '100';

        if (isset($data['limite'])) {
            $limite = $data['limite'];
        }

        if (!is_numeric($limite)) {
            throw new \InvalidArgumentException(sprintf('Expected integer argument "%s"','limite'));
        }

        $inicio = 0;

        if (isset($data['inicio'])) {
            $inicio = $data['inicio'];
        }

        if (!is_numeric($inicio)) {
            throw new \InvalidArgumentException(sprintf('Expected integer argument "%s"','inicio'));
        }

        $ordem = 'handle,desc';

        if ( isset($data['ordem'])) {
            $ordem = $data['ordem'];
        }

        $nomeCidade = '';

        if (isset($data['nomeCidade'])) {
            $nomeCidade = $data['nomeCidade'];
        }

        $parameters = array(
            'CNPJ' => $cnpj,
            'grupo' => $grupo,
            'Campos' => $campos,
            'limite' => $limite,
            'Ordem' => $ordem,
        );

        if (0 < $inicio) {
            $parameters = array_merge($parameters,array('Inicio'=>$inicio));
        }

        if (!empty($nomeCidade)) {
            $parameters = array_merge($parameters,array('NomeCidade'=>$nomeCidade));
        }

    }

    public function resolve()
    {

    }

} 