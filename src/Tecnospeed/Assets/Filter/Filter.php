<?php

namespace Tecnospeed\Assets\Filter;

class Filter {

    /**
     * Retorna apenas numeros.
     * @param $numbers
     * @return mixed
     */
    public static function returnOnlyNumbers($numbers)
    {
        return preg_replace('/[^0-9]/', '', $numbers);
    }

    /**
     * Remove acentos e caracteres especiais
     * @param $string
     * @return mixed
     */
    public static function returnOnlyString($string)
    {
       $string = utf8_encode($string);
       return preg_replace( '/[`^~\'"]/', null,iconv('UTF-8', "ISO-8859-1//IGNORE", $string));
    }

    public static function separeDataResult($data)
    {
        $data = ((urlencode($data)));
        return explode('%0D%0A',$data);

    }

    public static function normalizeResultApi($array = array())
    {
        if(empty($array[0]) || is_null($array)) {
            throw new \InvalidArgumentException('Informe o Array a ser normalizado');
        }

        $result_array = array();

        foreach ($array as $result) {

            list(
                  $idIntegracao
                , $situacao
                , $nrps
                , $nLote
                , $nProtocolo
                , $dtEmissao
                , $email
                , $handle
                , $dtAutorizacao
                , $dtCancelamento
                , $cnpj
                , $cidade
                , $idGrupo
                , $serie
                , $tipo
                , $cnpjTomador
                , $nomeTomador
                , $nnfse
                , $seriePrestacao
                ) = explode(',', urldecode($result));

            $result_array[] = array(
                'idintegracao'   => $idIntegracao,
                'situacao'       => $situacao,
                'nrps'           => $nrps,
                'nlote'          => $nLote,
                'nprotocolo'     => $nProtocolo,
                'dtemissao'      => $dtEmissao,
                'email'          => $email,
                'handle'         => $handle,
                'dtautorizacao'  => $dtAutorizacao,
                'dtcancelamento' => $dtCancelamento,
                'cnpj'           => $cnpj,
                'cidade'         => $cidade,
                'idgrupo'        => $idGrupo,
                'serie'          => $serie,
                'tipo'           => $tipo,
                'cnpjtomador'    => $cnpjTomador,
                'nometomador'    => $nomeTomador,
                'nnfse'          => $nnfse,
                'serieprestacao' => $seriePrestacao
            );


        }
        return $result_array;
    }


    /**
     * Valida o formato do email.
     * @param $mail
     * @return bool
     */
    public static function validateEmail($mail)
    {
        if (preg_match('/^[^0-9][a-zA-Z0-9_\-]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$mail))
            return(true);
        else
            return(false);
    }


}