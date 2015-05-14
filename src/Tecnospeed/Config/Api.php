<?php

/**
 * Configuracao para consulta na Api
 */

return array(

    'consulta' => array(
        'user'      =>  'admin' ,
        'passoword' =>  '123mudar',
        'url'       =>  '192.168.200.199:8081/ManagerAPIWeb/nfse/consulta?',
        'campos'    =>  'idintegracao,situacao,nrps,nlote,nprotocolo,dtemissao,email,handle,dtautorizacao,dtcancelamento,cnpj,cidade,idgrupo,serie,tipo,cnpjtomador,nometomador,nnfse,serieprestacao',
        'ordem'     =>  'nnfse asc',
        'limite'     => (int) 1000,
    ),

    'imprime'  => array(
        'url'       =>  '192.168.200.199:8081/ManagerAPIWeb/nfse/imprime?',
        'user'      =>  'admin',
        'passoword' =>  '123mudar',
    ),

    'descarta' => array(
        'url'       =>  '192.168.200.199:8081/ManagerAPIWeb/nfse/descarta?',
        'user'      =>  'admin',
        'passoword' =>  '123mudar',
    ),

    'exportaxml' => array(
        'url'       =>  '192.168.200.199:8081/ManagerAPIWeb/nfse/exportaxml?',
        'user'      =>  'admin',
        'passoword' =>  '123mudar',
    ),






);