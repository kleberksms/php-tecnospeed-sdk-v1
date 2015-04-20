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
       return preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $string ) );
    }

}