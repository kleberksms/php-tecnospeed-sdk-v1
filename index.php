<?php
$time_start = microtime(true);

require_once __DIR__ . '/vendor/autoload.php';

$nf = new \Tecnospeed\NF();
$arrayResp = array();
$arrayTx2 = require_once  __DIR__ .'/src/Tecnospeed/Tx2Teste/Tx2.php';

$rps = 1;
$i   = 1;

while($i > 0) {

    $data = $arrayTx2['Maringa'];

    try {
        $result = $nf->sendWithSocket($data);
    } catch (Exception $e) {
        echo 'Erro ao enviar Nf<br>'.var_dump($e->getMessage());
    }
    $arrayResp[] = isset($result) ? $result : false;
    $i --;
    $rps++;
}

$time_end = microtime(true);
$execution_time = ($time_end - $time_start);
echo '<b>Tempo de execucao Envio Nf:</b> <br><i>'.$execution_time.' segs</i>'.'<br>Testando 1 notas<br>';
die(var_dump($arrayResp));




//$data = array();
//$data['campos'] = array('nrps','limite');
//$data['nrps']= 130;
//$retorno = $nf->find($data);
//die(var_dump($retorno));


$c = new \Tecnospeed\HttpClient\TecnospeedCurlHttpClient();

$encoded = base64_encode("admin:123mudar");
$authorization = "Basic {$encoded}";
$find->addRequestHeader('Authorization',$authorization);

var_dump($c->send('localhost:9999','GET'));

