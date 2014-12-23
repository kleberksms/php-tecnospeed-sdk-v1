<?php

namespace Tecnospeed;

use Tecnospeed\Entity\Send;
use GeneratedHydrator\Configuration;
use Tecnospeed\Assets\SendParams;


class NF {

    public $entity;
    public $entityManager = 'Tecnospeed\Entity\Send';
    public $config;
    public $hydratorClass;
    public $hydrator;

    public function __construct($entity = null)
    {
        if (empty($entity) || is_null($entity)) {
            $this->entity = $entity;
        }

        $this->config = new Configuration($this->entityManager);

        $this->hydratorClass = $this->config->createFactory()->getHydratorClass();

        $this->hydrator  = new $this->hydratorClass();

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