<?php

namespace Tecnospeed;

use GeneratedHydrator\Configuration;
use Tecnospeed\Assets\SendParams;


class NF {

    public $entity;
    public $entityManager = 'Tecnospeed\Entity\Send';
    public $config;
    public $hydratorClass;
    public $hydrator;

    public function __construct(String $entityManager = null)
    {
        if (!is_null($entityManager)) {
            $this->entityManager = $entityManager;
        }

        $this->config = new Configuration($this->entityManager);

        $this->hydratorClass = $this->config->createFactory()->getHydratorClass();

        $this->hydrator  = new $this->hydratorClass();

    }

    public function send()
    {
        if (!is_object($this->entity)) {
            throw new \Exception('is not a entity object');
        }
    }


    /**
     * @param array $content
     * @return mixed
     */
    public function content($content = array())
    {
        if ( empty($content) ) {
            throw new \InvalidArgumentException('Empty array');
        }

        $haveDifferences = array_diff_key($content,SendParams::params());
        if( !empty($haveDifferences)) {
            throw new \InvalidArgumentException(sprintf("Invalid Arguments"));
        }

        $this->entity = new $this->entityManager;

        $this->hydrator->hydrate($content,$this->entity);

        return $this->entity;

    }




} 