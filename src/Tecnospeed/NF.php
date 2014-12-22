<?php

namespace Tecnospeed;

use Tecnospeed\Entity\Send;
use GeneratedHydrator\Configuration;
use Tecnospeed\Assets\SendParams;


class NF {

    public $sendNf;

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

        $config = new Configuration('Tecnospeed\Entity\Send');

        $hydratorClass = $config->createFactory()->getHydratorClass();

        $hydrator  = new $hydratorClass();

        $this->sendNf = new Send();

        $hydrator->hydrate($content,$this->sendNf);

        return $this->sendNf;

    }




} 