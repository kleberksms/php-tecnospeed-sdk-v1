<?php
require_once __DIR__ . '/vendor/autoload.php';

$nf  = new \Tecnospeed\NF();
$api = new \Tecnospeed\HttpClient\TecnospeedApi();
//
//$notaCancela = $api->descartaNf('03404018000147');
//die(var_dump($notaCancela));



//die(var_dump($pdf));
//
//echo    "<script> window.open({$pdf},'Download')</script>";
//exit;

$time_start = microtime(true);
$parameters = array(
    'filtro'  => 'nrps=156',
);
//$pdf = $api->pdf('03404018000147', false);
$result = $api->find('03404018000147',$parameters);
//$notaCancela = $api->descartaNf('03404018000147');
//$result = $api->getLastRps('03404018000147');
$time_end = microtime(true);
var_dump($result.'<br>'.'<hr>');
$execution_time = ($time_end - $time_start);
echo '<b>Tempo de consutlta Nf:</b> <br><i>'.$execution_time.' segs</i>'.'<br>Testando 1 notas(s)<br>';
die();




$nfseRejeitadas = $api->descartaNf('03404018000147');
die(var_dump($nfseRejeitadas));

$result = $api->find('03404018000147',$parameters);
die(var_dump($result));


$cod = ((urlencode($result)));
$result = explode('%0D%0A',$cod);
var_dump($result);
exit;
foreach($result as $nfse) {
    $arrayResult['nfse'][] = $nfse;
}

die(var_dump($arrayResult));

$arrayResp = array();
$arrayTx2 = require_once  __DIR__ .'/src/Tecnospeed/Tx2Teste/Tx2.php';

$rps = 1;
$i   = 1;

//while($i > 0) {
//
//    $data = $arrayTx2['JoaoPessoa'];
//
//
//    try {
//        $result = $nf->sendWithSocket($data);
//    } catch (Exception $e) {
//        echo 'Erro ao enviar Nf<br>'.var_dump($e->getMessage());
//    }
//    $arrayResp[] = isset($result) ? $result : false;
//    $i --;
//    $rps++;
//}
//
//$time_end = microtime(true);
//$execution_time = ($time_end - $time_start);
//echo '<b>Tempo de execucao Envio Nf:</b> <br><i>'.$execution_time.' segs</i>'.'<br>Testando 1 notas<br>';
//die(var_dump($arrayResp));
//
//
//
//
//$data = array();
//$data['campos'] = array('nrps','limite');
//$data['nrps']= 130;
//$retorno = $nf->find($data);
//die(var_dump($retorno));




//$c = new \Tecnospeed\HttpClient\TecnospeedCurlHttpClient();
//$encoded = base64_encode("admin:123mudar");
//$authorization = "Basic {$encoded}";
//$c->addRequestHeader('Authorization',$authorization);
//
//$url = "192.168.200.199:8081/ManagerAPIWeb/nfse/consulta?";
//$c->addRequestHeader('Host',$url);
//$c->addRequestHeader('Content-Length',strlen(http_build_query($parameters)));
//$method = 'GET';
//$result = $c->send($url, $method, $parameters);
//
//
//
//die(var_dump($result));


$username ='admin';
$password = '123mudar';



$url = '192.168.200.199:8081/ManagerAPIWeb/nfse/consulta?';

$parameters = array(
    'CNPJ'            => '03404018000147',
    'grupo'           => 'Maringa',
    'NomeCidade'      => 'Maringa',
    'filtro'          => 'idintegracao=519501',
    'campos'          => 'idintegracao,situacao,nrps,nlote,nprotocolo,dtemissao,email,handle,dtautorizacao,dtcancelamento,cnpj,cidade,idgrupo,serie,tipo,cnpjtomador,nometomador,nnfse,serieprestacao',
);


$url .=http_build_query($parameters);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERPWD, "admin:123mudar");

$result = curl_exec($ch);
print_r($result);
curl_close($ch);

