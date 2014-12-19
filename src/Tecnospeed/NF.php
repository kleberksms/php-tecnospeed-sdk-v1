<?php

namespace Tecnospeed;

use Tecnospeed\Entity\Send;
use GeneratedHydrator\Configuration;
use Tecnospeed\Assets\SendParams;

class NF {

    public $send;


    public function __construct()
    {

    }

    public function send()
    {
        /*$url = '';
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        curl_close($ch);*/
    }

    /**
     * @param array $content
     * @return Send
     */
    public function content($content = array())
    {
        if ( empty($content) ) {
            throw new \InvalidArgumentException('Empty array');
        }

        $haveDifference = array_diff_key($content,SendParams::params());
        if( !empty($haveDifference)) {
            throw new \InvalidArgumentException('Invalid Arguments');
        }

        $config = new Configuration('Tecnospeed\Entity\Send');

        $hydratorClass = $config->createFactory()->getHydratorClass();
        $hydrator      = new $hydratorClass();

        $this->send = new Send();

        $hydrator->hydrate($content,$this->send);

        return $this->send;

    }




} 