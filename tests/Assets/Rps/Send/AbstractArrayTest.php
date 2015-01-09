<?php

namespace Assets\Rps\Send;


use Tecnospeed\Assets\Rps\Send\AbstractArray;
use Tecnospeed\Assets\SendParams;

class AbstractArrayTest extends \PHPUnit_Framework_TestCase
{

    private $array = array(
        'Formato'=>'',
        'Padrao'=>'',
        'NomeCidade'=>'',
        'IdLote'=>'',
        'NumeroLote'=>'',
        'QuantidadeRPS'=>'',
        'Transacao'=>'',
        'MetodoEnvio'=>'',
        'CpfCnpjRemetente'=>'',
        'RazaoSocialRemetente' => '',
        'InscricaoMunicipalRemetente'=>'',
        'CodigoCidadeRemetente'=>'',
        'DataInicio'=>'',
        'DataFim'=>'',
        'ValorTotalServicos'=>'',
        'ValorTotalBaseCalculo'=>'',
        'ValorTotalDeducoes'=>'',
        'IdRps'=>'',
        'SituacaoNota'=>'',
        'TipoRps'=>'',
        'SerieRps'=>'',
        'NumeroRps'=>'',
        'DataEmissao'=>'',
        'Competencia'=>'',
        'CpfCnpjPrestador'=>'',
        'InscricaoMunicipalPrestador'=>'',
        'RazaoSocialPrestador'=>'',
        'CodigoCidadePrestacao'=>'',
        'DescricaoCidadePrestacao'=>'',
        'OptanteSimplesNacional'=>'',
        'IncentivadorCultural'=>'',
        'RegimeEspecialTributacao'=>'',
        'NaturezaTributacao'=>'',
        'IncentivoFiscal'=>'',
        'IncentivoFiscal'=>'',
        'CpfCnpjTomador'=>'',
        'RazaoSocialTomador'=>'',
        'InscricaoEstadualTomador'=>'',
        'TipoLogradouroTomador'=>'',
        'EnderecoTomador'=>'',
        'NumeroTomador'=>'',
        'ComplementoTomador'=>'',
        'TipoBairroTomador'=>'',
        'BairroTomador'=>'',
        'CodigoCidadeTomador'=>'',
        'DescricaoCidadeTomador'=>'',
        'UfTomador'=>'',
        'CepTomador'=>'',
        'PaisTomador'=>'',
        'DddTomador'=>'',
        'TelefoneTomador'=>'',
        'EmailTomador'=>'',
        'CodigoItemListaServico'=>'',
        'CodigoTributacaoMunicipio'=>'',
        'CodigoCnae'=>'',
        'DiscriminacaoServico'=>'',
        'TipoTributacao'=>'',
        'ExigibilidadeISS'=>'',
        'Operacao'=>'',
        'MunicipioIncidencia'=>'',
        'ValorServicos'=>'',
        'AliquotaPIS'=>'',
        'AliquotaCOFINS'=>'',
        'AliquotaINSS'=>'',
        'AliquotaIR'=>'',
        'AliquotaCSLL'=>'',
        'ValorPIS'=>'',
        'ValorCOFINS'=>'',
        'ValorINSS'=>'',
        'ValorIR'=>'',
        'ValorCSLL'=>'',
        'OutrasRetencoes'=>'',
        'DescontoIncondicionado'=>'',
        'DescontoCondicionado'=>'',
        'ValorDeducoes'=>'',
        'BaseCalculo'=>'',
        'AliquotaISS'=>'',
        'ValorIss'=>'',
        'IssRetido'=>'',
        'ValorISSRetido'=>'',
        'ValorLiquidoNfse'=>''
    );

    public function testIfNormalizeArraySenRps(){

        $params = new SendParams();
        $array = new AbstractArray();
        $this->assertEquals($this->array, $array->normalizeArray($params->params()), 'Array not valid');

    }

} 