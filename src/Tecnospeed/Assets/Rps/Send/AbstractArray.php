<?php

namespace Tecnospeed\Assets\Rps\Send;


class AbstractArray {

    public function normalizeArray(array $array)
    {
        $final = array();

        $reserved = array(
            'QuantidadeRps'=>'QuantidadeRPS',
            'ExigibilidadeIss'=>'ExigibilidadeISS',
            'AliquotaPis'=>'AliquotaPIS',
            'AliquotaCofins'=>'AliquotaCOFINS',
            'AliquotaInss'=>'AliquotaINSS',
            'AliquotaIr'=>'AliquotaIR',
            'AliquotaCsll'=>'AliquotaCSLL',
            'ValorPis'=>'ValorPIS',
            'ValorCofins'=>'ValorCOFINS',
            'ValorInss'=>'ValorINSS',
            'ValorIr'=>'ValorIR',
            'ValorCsll'=>'ValorCSLL',
            'AliquotaIss'=>'AliquotaISS',
            'ValorIssRetido'=>'ValorISSRetido',


        );

        foreach($array as $k => $v){

            $name = str_replace('_',' ',$k);
            $name = ucwords($name);
            $name = preg_replace('/\s+/', '', $name);
            if (isset($reserved[$name])) {
                $name =  $reserved[$name];
            }
            $final = array_merge($final,array($name=>$v));
        }

        return $final;
    }
}