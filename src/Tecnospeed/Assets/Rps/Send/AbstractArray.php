<?php

namespace Tecnospeed\Assets\Rps\Send;


class AbstractArray {

    /**
     * $reserved OBS
     *  quando o hidrator pega o array, retorna como name_name,
     *  porem o documento da tecnospeed exige que aunda campos sejam NameName
     *  e outros NameNAME
     *  este é o motivo da conversão
     * @param array $array
     * @return array
     */
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