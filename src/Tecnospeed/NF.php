<?php

namespace Tecnospeed;

use Tecnospeed\Entity\Send;

use Tecnospeed\Assets\SendParams;

class NF {


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
     * @param $content
     * @return bool
     */
    public function content($content = array())
    {
        if ( empty($content) ) {
            throw new \InvalidArgumentException('Empty array');
        }

        if( ! empty(array_diff($content,SendParams::params()))) {
            throw new \InvalidArgumentException('Invalid Arguments');
        }



        return true;
    }




} 