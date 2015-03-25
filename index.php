<?php

require_once __DIR__ . '/vendor/autoload.php';

$data = array(
    'formato'=>'tx2',
    'padrao'=>'TecnoNFSe',
    'nomeCidade'=>'OSASCO',
    'idLote'=>'',
    'numeroLote'=>'1',
    'quantidadeRPS'=>'1',
    'transacao'=>'true',
    'metodoEnvio'=>'WS',
    'cpfCnpjRemetente'=>'08187168000160',
    'inscricaoMunicipalRemetente'=>'1234',
    'razaoSocialRemetente'=>'Tecnospeed',
    'codigoCidadeRemetente'=>'3534401',
    'dataInicio'=>'2014-11-17',
    'dataFim'=>'2014-11-17',
    'valorTotalServicos'=>'1.00',
    'valorTotalDeducoes'=>'0.00',
    'valorTotalBaseCalculo'=>'1.00',
    'idRps'=>'1',
    'situacaoNota'=>'1',
    'tipoRps'=>'1',
    'serieRps'=>'1',
    'numeroRps'=>'1',
    'dataEmissao'=>'2014-11-17T00:00:00',
    'competencia'=>'2014-11-17',
    'cpfCnpjPrestador'=>'08187168000160',
    'inscricaoMunicipalPrestador'=>'1234',
    'razaoSocialPrestador'=>'Tecnospeed',
    'codigoCidadePrestacao'=>'3534401',
    'descricaoCidadePrestacao'=>'OSASCO',
    'optanteSimplesNacional'=>'2',
    'incentivadorCultural'=>'2',
    'regimeEspecialTributacao'=>'0',
    'naturezaTributacao'=>'0',
    'incentivoFiscal'=>'2',
    'cpfCnpjTomador'=>'08187168000160',
    'razaoSocialTomador'=>'TECNOSPEED TECNOLOGIA DA INFORMAÇÃO',
    'inscricaoEstadualTomador'=>'9044016688',
    'tipoLogradouroTomador'=>'AVENIDA',
    'enderecoTomador'=>'AVENIDA DUQUE DE CAXIAS',
    'numeroTomador'=>'882',
    'complementoTomador'=>'SALA 909',
    'tipoBairroTomador'=>'ZONA',
    'bairroTomador'=>'ZONA 7',
    'codigoCidadeTomador'=>'4115200',
    'descricaoCidadeTomador'=>'MARINGA',
    'ufTomador'=>'PR',
    'cepTomador'=>'87020025',
    'paisTomador'=>'1058',
    'dddTomador'=>'44',
    'telefoneTomador'=>'30379500',
    'emailTomador'=>'erike@tecnospeed.com.br',
    'codigoItemListaServico'=>'15.10',
    'codigoTributacaoMunicipio'=>'661930200',
    'codigoCnae'=>'6619302',
    'discriminacaoServico'=>'SERVICOS DE RECEBIMENTO DE FATURAS',
    'tipoTributacao'=>'6',
    'exigibilidadeISS'=>'1',
    'operacao'=>'A',
    'municipioIncidencia'=>'3534401',
    'valorServicos'=>'1.00',
    'aliquotaPIS'=>'0.00',
    'aliquotaCOFINS'=>'0.00',
    'aliquotaINSS'=>'0.00',
    'aliquotaIR'=>'0.00',
    'aliquotaCSLL'=>'0.00',
    'valorPIS'=>'0.00',
    'valorCOFINS'=>'0.00',
    'valorINSS'=>'0.00',
    'valorIR'=>'0.00',
    'valorCSLL'=>'0.00',
    'outrasRetencoes'=>'0.00',
    'descontoIncondicionado'=>'0.00',
    'descontoCondicionado'=>'0.00',
    'valorDeducoes'=>'0.00',
    'baseCalculo'=>'1.00',
    'aliquotaISS'=>'5.00',
    'valorIss'=>'0.05',
    'issRetido'=>'2',
    'valorISSRetido'=>'0.00',
    'valorLiquidoNfse'=>'1.00',
);

$nf = new \Tecnospeed\NF();

$result = $nf->send($data);

print_r($result);


/**
$curl = new \Tecnospeed\HttpClient\TecnospeedCurlHttpClient();

$address = 'https://br.api.pvp.net/api/lol/br/v1.4/summoner/by-name/geandomal?api_key=c62e838d-c868-413c-bdfe-75b712eee3d3';

$result = $curl->send($address,'GET');

print_r($result);
 */
