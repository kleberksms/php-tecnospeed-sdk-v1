<?php

namespace Tecnospeed;

use Tecnospeed\Assets\SendParams;
use Tecnospeed\HttpClient\TecnospeedCurlHttpClient;
use Zend\Stdlib\Hydrator;


class NF {

    public $entity;
    public $entityManager = 'Tecnospeed\Entity\Send';
    public $config;
    public $hydratorClass;
    public $hydrator;

    public function __construct($entityManager = null)
    {
        if (!is_null($entityManager)) {
            $this->entityManager = $entityManager;
        }

        if (!class_exists($this->entityManager)) {
            throw new \InvalidArgumentException('Class do not exist');
        }

        $this->entity = new $this->entityManager;

        $this->hydrator = new Hydrator\ClassMethods();

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

        $this->hydrator->hydrate($content, $this->entity);

        return $this->entity;

    }

    public function send($config = array())
    {
        $url = '';
        if (isset($config['url'])) {
            $url = $config['url'];
            unset($config['url']);
        }

        $method = 'POST';
        if (isset($config['method'])) {
            $method = $config['method'];
            unset($config['method']);
        }


        //$send = new TecnospeedCurlHttpClient();

       // return $send->send($url, $method,$parameters);

    }









} 