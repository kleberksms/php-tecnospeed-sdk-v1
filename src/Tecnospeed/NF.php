<?php

namespace Tecnospeed;

use Tecnospeed\Assets\Rps\Send\ArrayToTx2;
use Tecnospeed\Assets\SendParams;
use Tecnospeed\Entity\Send;
use Tecnospeed\HttpClient\TecnospeedCurlHttpClient;
use Zend\Stdlib\Hydrator;


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

            $this->hydrator = new Hydrator\ClassMethods();

            $this->hydrator->hydrate($content, $this->entity);

            return $this->entity;
        }catch (Exception $e){
            echo $e;
        }

    }

    public function send($config = array())
    {

        $url = $this->configuration['url'].'/ManagerAPIWeb/nfse/envia ';
        if (isset($config['url'])) {
            $url = $config['url'];
            unset($config['url']);
        }

        $method = 'POST';
        if (isset($config['method'])) {
            $method = $config['method'];
            unset($config['method']);
        }

        $stringTx2 = new ArrayToTx2($this->hydrator->extract($this->entity));

        $parameters = array(
            'CNPJ'=>$this->configuration['CNPJ'],
            'senha'=>$this->configuration['senha'],
            'usuario'=>$this->configuration['usuario'],
            'grupo'=>$this->configuration['grupo'],
            'arquivo'=>$stringTx2,
        );

        //$send = new TecnospeedCurlHttpClient();

        //return $send->send($url, $method,$parameters);

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