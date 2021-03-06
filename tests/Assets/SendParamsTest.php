<?php
use Tecnospeed\Assets\SendParams;

class SendParamsTest extends  \PHPUnit_Framework_TestCase
{

    public function testParams()
    {
        $this->assertEquals(array(
            'formato'=>'',
            'padrao'=>'',
            'nomeCidade'=>'',
            'idLote'=>'',
            'numeroLote'=>'',
            'quantidadeRPS'=>'',
            'transacao'=>'',
            'metodoEnvio'=>'',
            'cpfCnpjRemetente'=>'',
            'razaoSocialRemetente' => '',
            'inscricaoMunicipalRemetente'=>'',
            'codigoCidadeRemetente'=>'',
            'dataInicio'=>'',
            'dataFim'=>'',
            'valorTotalServicos'=>'',
            'valorTotalBaseCalculo'=>'',
            'valorTotalDeducoes'=>'',
            'idRps'=>'',
            'situacaoNota'=>'',
            'tipoRps'=>'',
            'serieRps'=>'',
            'numeroRps'=>'',
            'dataEmissao'=>'',
            'competencia'=>'',
            'cpfCnpjPrestador'=>'',
            'inscricaoMunicipalPrestador'=>'',
            'razaoSocialPrestador'=>'',
            'codigoCidadePrestacao'=>'',
            'descricaoCidadePrestacao'=>'',
            'optanteSimplesNacional'=>'',
            'incentivadorCultural'=>'',
            'regimeEspecialTributacao'=>'',
            'naturezaTributacao'=>'',
            'incentivoFiscal'=>'',
            'incentivoFiscal'=>'',
            'cpfCnpjTomador'=>'',
            'razaoSocialTomador'=>'',
            'inscricaoEstadualTomador'=>'',
            'tipoLogradouroTomador'=>'',
            'enderecoTomador'=>'',
            'numeroTomador'=>'',
            'complementoTomador'=>'',
            'tipoBairroTomador'=>'',
            'bairroTomador'=>'',
            'codigoCidadeTomador'=>'',
            'descricaoCidadeTomador'=>'',
            'ufTomador'=>'',
            'cepTomador'=>'',
            'paisTomador'=>'',
            'dddTomador'=>'',
            'telefoneTomador'=>'',
            'emailTomador'=>'',
            'codigoItemListaServico'=>'',
            'codigoTributacaoMunicipio'=>'',
            'codigoCnae'=>'',
            'discriminacaoServico'=>'',
            'tipoTributacao'=>'',
            'exigibilidadeISS'=>'',
            'operacao'=>'',
            'municipioIncidencia'=>'',
            'valorServicos'=>'',
            'aliquotaPIS'=>'',
            'aliquotaCOFINS'=>'',
            'aliquotaINSS'=>'',
            'aliquotaIR'=>'',
            'aliquotaCSLL'=>'',
            'valorPIS'=>'',
            'valorCOFINS'=>'',
            'valorINSS'=>'',
            'valorIR'=>'',
            'valorCSLL'=>'',
            'outrasRetencoes'=>'',
            'descontoIncondicionado'=>'',
            'descontoCondicionado'=>'',
            'valorDeducoes'=>'',
            'baseCalculo'=>'',
            'aliquotaISS'=>'',
            'valorIss'=>'',
            'issRetido'=>'',
            'valorISSRetido'=>'',
            'valorLiquidoNfse'=>''
        ),SendParams::params());
    }

    public function testIfParamsIsArray()
    {
        $this->assertTrue(is_array(SendParams::params()),'Return is not an array');
    }

} 