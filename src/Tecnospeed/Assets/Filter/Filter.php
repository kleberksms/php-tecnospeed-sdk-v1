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
       return preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $string ) );
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


}