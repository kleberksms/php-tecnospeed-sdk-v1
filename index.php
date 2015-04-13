<?php
require_once __DIR__ . '/vendor/autoload.php';
$time_start = microtime(true);
$rps = 1;
$i   = 1;
$nf = new \Tecnospeed\NF();
$arrayResp = array();

while($i > 0) {

    $data = array(
        'formato'=>'tx2',
        'padrao'=>'TecnoNFSe',
        'nomeCidade'=>'JOAOPESSOA',
        'IdLote'=>'L1',
        'numeroLote'=>'4',
        'versao'=>'2.01',
        'quantidadeRPS'=>'1',
        'transacao'=>true,
        'metodoEnvio'=>'WS',
        'cpfCnpjRemetente'=>'03404018003081',
        'inscricaoMunicipalRemetente'=>'1050052',
        'razaoSocialRemetente'=>'Advocacia Bellinati Perez',
        'codigoCidadeRemetente'=>'2507507',
        'dataInicio'=>'2014-11-17T00:00:00',
        'dataFim'=>'2014-11-17T00:00:00',
        'valorTotalServicos'=>'46,82',
        'valorTotalDeducoes'=>'0',
        'valorTotalBaseCalculo'=>1.00,
        'idIntegracao'=>367495,
        'idRps'=>'R1',
        'situacaoNota'=>'1',
        'tipoRps'=>'1',
        'serieRps'=>'U',
        'numeroRps'=>$rps,
        'dataEmissao'=>'2015-04-09T00:00:00',
        'competencia'=>'2015-04-09',
        'cpfCnpjPrestador'=>'03404018003081',
        'inscricaoMunicipalPrestador'=>'1050052',
        'razaoSocialPrestador'=>'Tecnospeed',
        'codigoCidadePrestacao'=>'4115200',
        'descricaoCidadePrestacao'=>'Maringa',
        'optanteSimplesNacional'=>'2',
        'incentivadorCultural'=>'2',
        'regimeEspecialTributacao'=>'0',
        'valorTotalServicos'=>'0.0',
        'naturezaTributacao'=>'1',
        'incentivoFiscal'=>'2',
        'cpfCnpjTomador'=>'08105202905',
        'razaoSocialTomador'=>'TECNOSPEED TECNOLOGIA DA INFORMACAO',
        'inscricaoEstadualTomador'=>'9044016688',
        'tipoLogradouroTomador'=>'AVENIDA',
        'enderecoTomador'=>'AVENIDA DUQUE DE CAXIAS',
        'numeroTomador'=>'99',
        'complementoTomador'=>'',
        'tipoBairroTomador'=>'ZONA',
        'bairroTomador'=>'NAO IDENTIFICADO',
        'codigoCidadeTomador'=>'4115200',
        'descricaoCidadeTomador'=>'MARINGA',
        'ufTomador'=>'PR',
        'cepTomador'=>'87020025',
        'paisTomador'=>'1058',
        'dddTomador'=>'44',
        'telefoneTomador'=>'30379500',
        'emailTomador'=>'erike@tecnospeed.com.br',
        'codigoItemListaServico'=>1714,
        'codigoTributacaoMunicipio'=>'4115200',
        'codigoCnae'=>'6611801',
        'discriminacaoServico'=>'HONORARIOS ADVOCATICIOS',
        'tipoTributacao'=>7,
        'exigibilidadeISS'=>'1',
        'operacao'=>'',
        'municipioIncidencia'=>'4115200',
        'valorServicos'=>'50,00',
        'aliquotaPIS'=>'0',
        'aliquotaCOFINS'=>'0.00',
        'aliquotaINSS'=>'0.00',
        'aliquotaIR'=>'0.00',
        'aliquotaCSLL'=>'0.00',
        'valorPIS'=>'0.00',
        'valorCOFINS'=>'0.00',
        'valorINSS'=>'0.00',
        'valorIR'=>'0.00',
        'valorCSLL'=>'0.00',
        'outrasRetencoes'=>'0',
        'descontoIncondicionado'=>'0',
        'descontoCondicionado'=>'0.00',
        'valorDeducoes'=>'0.00',
        'baseCalculo'=>'0',
        'aliquotaISS'=>'0',
        'valorIss'=>'2,34',
        'issRetido'=>'2',
        'valorISSRetido'=>'0.00',
        'valorLiquidoNfse'=>'1.00',
    );


    $result = $nf->sendWithSocket($data);
    $arrayResp[] = $result;
    $i --;
    $rps++;
}

$time_end = microtime(true);

//dividing with 60 will give the execution time in minutes other wise seconds
$execution_time = ($time_end - $time_start);

//execution time of the script
echo '<b>Tempo de execucao Envio Nf:</b> <br><i>'.$execution_time.' segs</i>'.'<br>Testando 2 notas<br>';
die(var_dump($arrayResp));

$data = array();
$data['campos'] = array('nrps','limite');
$data['nrps']= 130;
$retorno = $nf->find($data);
var_dump($retorno);
