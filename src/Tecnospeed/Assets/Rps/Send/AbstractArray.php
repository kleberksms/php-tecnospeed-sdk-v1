<?php

namespace Tecnospeed\Assets\Rps\Send;


class AbstractArray {

    public function normalizeArray(array $array)
    {
        $final = array();

        foreach($array as $k => $v){
            $final[ucfirst($k)] = $v;
        }

        return $final;
    }
} 