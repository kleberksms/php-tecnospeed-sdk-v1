<?php

namespace Assets\Rps\Send;

use Assets\Rps\Send\ArrayToTx2;


class ArrayToTx2Test extends \PHPUnit_Framework_TestCase
{

    private $tx2 = "
        formato=tx2
        padrao=TecnoNFSe
        NomeCidade=OSASCO

        INCLUIR
        IDLote=
        NumeroLote=1
        QuantidadeRPS=1
        Transacao=true
        MetodoEnvio=WS
        CpfCnpjRemetente=08187168000160
        InscricaoMunicipalRemetente=1234
        RazaoSocialRemetente=Tecnospeed
        CodigoCidadeRemetente=3534401
        DataInicio=2014-11-17
        DataFim=2014-11-17
        ValorTotalServicos=1.00
        ValorTotalDeducoes=0.00
        ValorTotalBaseCalculo=1.00
        SALVAR

        INCLUIRRPS
        IdRps=1
        SituacaoNota=1
        TipoRps=1
        SerieRps=1
        NumeroRps=1
        DataEmissao=2014-11-17T00:00:00
        Competencia=2014-11-17
        CpfCnpjPrestador=08187168000160
        InscricaoMunicipalPrestador=1234
        RazaoSocialPrestador=Tecnospeed
        CodigoCidadePrestacao=3534401
        DescricaoCidadePrestacao=OSASCO
        OptanteSimplesNacional=2
        IncentivadorCultural=2
        RegimeEspecialTributacao=0
        NaturezaTributacao=0
        IncentivoFiscal=2
        CpfCnpjTomador=08187168000160
        RazaoSocialTomador=TECNOSPEED TECNOLOGIA DA INFORMAÇÃO
        InscricaoEstadualTomador=9044016688
        TipoLogradouroTomador=AVENIDA
        EnderecoTomador=AVENIDA DUQUE DE CAXIAS
        NumeroTomador=882
        ComplementoTomador=SALA 909
        TipoBairroTomador=ZONA
        BairroTomador=ZONA 7
        CodigoCidadeTomador=4115200
        DescricaoCidadeTomador=MARINGA
        UfTomador=PR
        CepTomador=87020025
        PaisTomador=1058
        DDDTomador=44
        TelefoneTomador=30379500
        EmailTomador=erike@tecnospeed.com.br
        CodigoItemListaServico=15.10
        CodigoTributacaoMunicipio=661930200
        CodigoCnae=6619302
        DiscriminacaoServico=SERVICOS DE RECEBIMENTO DE FATURAS
        TipoTributacao=6
        ExigibilidadeISS=1
        Operacao=A
        MunicipioIncidencia=3534401
        ValorServicos=1.00
        AliquotaPIS=0.00
        AliquotaCOFINS=0.00
        AliquotaINSS=0.00
        AliquotaIR=0.00
        AliquotaCSLL=0.00
        ValorPIS=0.00
        ValorCOFINS=0.00
        ValorINSS=0.00
        ValorIR=0.00
        ValorCSLL=0.00
        OutrasRetencoes=0.00
        DescontoIncondicionado=0.00
        DescontoCondicionado=0.00
        ValorDeducoes=0.00
        BaseCalculo=1.00
        AliquotaISS=5.00
        ValorIss=0.05
        IssRetido=2
        ValorISSRetido=0.00
        ValorLiquidoNfse=1.00
        SALVARRPS
        ";

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

    public function testIfConvertArrayToStringTx2Format()
    {
        $tx2 = new \Tecnospeed\Assets\Rps\Send\ArrayToTx2();
        $tx2->convert($this->array);
        $this->assertEquals($this->tx2, $tx2->getTx2());
    }
} 