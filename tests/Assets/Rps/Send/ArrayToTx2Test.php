<?php

namespace Assets\Rps\Send;

use Assets\Rps\Send\ArrayToTx2;


class ArrayToTx2Test extends \PHPUnit_Framework_TestCase
{

    private $tx2 = "formato=tx2\npadrao=TecnoNFSe\nNomeCidade=OSASCO\n\nINCLUIR\nIDLote=\nNumeroLote=1\nQuantidadeRPS=1\nTransacao=true\nMetodoEnvio=WS\nCpfCnpjRemetente=08187168000160\nInscricaoMunicipalRemetente=1234\nRazaoSocialRemetente=Tecnospeed\nCodigoCidadeRemetente=3534401\nDataInicio=2014-11-17\nDataFim=2014-11-17\nValorTotalServicos=1.00\nValorTotalDeducoes=0.00\nValorTotalBaseCalculo=1.00\nSALVAR\n\nINCLUIRPS\nIdRps=1\nSituacaoNota=1\nTipoRps=1\nSerieRps=1\nNumeroRps=1\nDataEmissao=2014-11-17T00:00:00\nCompetencia=2014-11-17\nCpfCnpjPrestador=08187168000160\nInscricaoMunicipalPrestador=1234\nRazaoSocialPrestador=Tecnospeed\nCodigoCidadePrestacao=3534401\nDescricaoCidadePrestacao=OSASCO\nOptanteSimplesNacional=2\nIncentivadorCultural=2\nRegimeEspecialTributacao=0\nNaturezaTributacao=0\nIncentivoFiscal=2\nCpfCnpjTomador=08187168000160\nRazaoSocialTomador=TECNOSPEED TECNOLOGIA DA INFORMAÇÃO\nInscricaoEstadualTomador=9044016688\nTipoLogradouroTomador=AVENIDA\nEnderecoTomador=AVENIDA DUQUE DE CAXIAS\nNumeroTomador=882\nComplementoTomador=SALA 909\nTipoBairroTomador=ZONA\nBairroTomador=ZONA 7\nCodigoCidadeTomador=4115200\nDescricaoCidadeTomador=MARINGA\nUfTomador=PR\nCepTomador=87020025\nPaisTomador=1058\nDDDTomador=44\nTelefoneTomador=30379500\nEmailTomador=erike@tecnospeed.com.br\nCodigoItemListaServico=15.10\nCodigoTributacaoMunicipio=661930200\nCodigoCnae=6619302\nDiscriminacaoServico=SERVICOS DE RECEBIMENTO DE FATURAS\nTipoTributacao=6\nExigibilidadeISS=1\nOperacao=A\nMunicipioIncidencia=3534401\nValorServicos=1.00\nAliquotaPIS=0.00\nAliquotaCOFINS=0.00\nAliquotaINSS=0.00\nAliquotaIR=0.00\nAliquotaCSLL=0.00\nValorPIS=0.00\nValorCOFINS=0.00\nValorINSS=0.00\nValorIR=0.00\nValorCSLL=0.00\nOutrasRetencoes=0.00\nDescontoIncondicionado=0.00\nDescontoCondicionado=0.00\nValorDeducoes=0.00\nBaseCalculo=1.00\nAliquotaISS=5.00\nValorIss=0.05\nIssRetido=2\nValorISSRetido=0.00\nValorLiquidoNfse=1.00\nSALVARRPS";
    public $array = array(
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

    /**
     * @todo crlf and lf problem
     */
    public function testIfConvertArrayToStringTx2Format()
    {
        $tx2 = new \Tecnospeed\Assets\Rps\Send\ArrayToTx2();
        $tx2->convertToString($this->array);
        $this->assertEquals(trim($this->tx2), trim($tx2->getTx2()));
    }
} 