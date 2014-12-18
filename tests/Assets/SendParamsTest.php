<?php
namespace Tecnospeed\Assets;

class SendParamsTest extends  \PHPUnit_Framework_TestCase
{

    public function testParams()
    {
        $this->assertEquals(array(
            'formato',
            'padrao',
            'NomeCidade',
            'IDLote',
            'NumeroLote',
            'QuantidadeRPS',
            'Transacao',
            'MetodoEnvio',
            'CpfCnpjRemetente',
            'InscricaoMunicipalRemetente',
            'CodigoCidadeRemetente',
            'DataInicio',
            'DataFim',
            'ValorTotalServicos',
            'ValorTotalBaseCalculo',
            'IdRps',
            'SituacaoNota',
            'TipoRps',
            'SerieRps',
            'NumeroRps',
            'DataEmissao',
            'Competencia',
            'CpfCnpjPrestador',
            'InscricaoMunicipalPrestador',
            'RazaoSocialPrestador',
            'CodigoCidadePrestacao',
            'DescricaoCidadePrestacao',
            'OptantesSimplesNacional',
            'IncentivadorCultural',
            'RegimeEspecialTributacao',
            'NaturezaTributacao',
            'IncentivoFiscal',
            'IncentivoFiscal',
            'CpfCnpjTomador',
            'RazaoSocialTomador',
            'InscricaoEstadualTomador',
            'TipoLogradouroTomador',
            'EnderecoTomador',
            'NumeroTomador',
            'ComplementoTomador',
            'TipoBairroTomador',
            'BairroTomador',
            'CodigoCidadeTomador',
            'DescricaoCidadeTomador',
            'UfTomador',
            'CepTomador',
            'PaisTomador',
            'DDDTomador',
            'TelefoneTomador',
            'EmailTomador',
            'CodigoItemListaServico',
            'CodigoTributacaoMunicipio',
            'CodigoCnae',
            'DiscriminacaoServico',
            'TipoTributacao',
            'ExigibilidadeISS',
            'Operacao',
            'MunicipioIncidencia',
            'ValorServicos',
            'AliquotaPIS',
            'AliquotaCOFINS',
            'AliquotaINSS',
            'AliquotaIR',
            'AliquotaCSLL',
            'ValorPIS',
            'ValorCOFINS',
            'ValorINSS',
            'ValorIR',
            'ValorCSLL',
            'OutrasRetencoes',
            'DescontoIncondicionado',
            'DescontoCondicionado',
            'ValorDeducoes',
            'BaseCalculo',
            'AliquotaISS',
            'ValorIss',
            'IssRetido',
            'ValorISSRetido',
            'ValorLiquidoNfse'
        ),SendParams::params());
    }

    public function testIfParamsIsArray()
    {
        $this->assertTrue(is_array(SendParams::params()),'Return is not an array');
    }

} 