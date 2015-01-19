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

    public function testWorks()
    {
        print_r("Send Class\n\n");
        print_r(new Send());
        print_r("\n\nIts Works\n\n");
        return;
    }

    /**
     * @param array $content
     * @return mixed
     */
    public function content($content = array())
    {
        if ( empty($content)) {
            throw new \InvalidArgumentException('Empty array');
        }

        $haveDifferences = array_diff_key($content,SendParams::params());
        if( !empty($haveDifferences)) {
            throw new \InvalidArgumentException(sprintf("Invalid Arguments"));
        }

        $this->entity = new $this->entityManager;

        $this->hydrator = new Hydrator\ClassMethods();

        $this->hydrator->hydrate($content, $this->entity);

        return $this->entity;

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

        $send = new TecnospeedCurlHttpClient();

        return $send->send($url, $method,$parameters);

    }

    public function findAll()
    {

    }

} 