<?php

namespace Tecnospeed\Assets\Rps\Send;

class ArrayToTx2 extends AbstractArray
{

    private $tx2;

    /**
     * @return mixed
     */
    public function getTx2()
    {
        return $this->tx2;
    }

    /**
     * @param mixed $tx2
     */
    public function setTx2($tx2)
    {
        $this->tx2 = $tx2;
    }


    public function convertToString(array $data)
    {

        $array  = $this->normalizeArray($data);
        $string  = "formato=".$array['Formato'];
        $string .= "\npadrao=".$array['Padrao'];
        $string .= "\nNomeCidade=".$array['NomeCidade'];
        $string .= "\nINCLUIR";
        $string .= "\nIDLote=".$array['IdLote'];
        $string .= "\nversao=".$array['Versao'];
        $string .= "\nNumeroLote=".$array['NumeroLote'];
        $string .= "\nQuantidadeRPS=".$array['QuantidadeRPS'];
        $string .= ($array['Transacao'] === true) ? "\nTransacao=true" : "\nTransacao=false";
        $string = $string."\nMetodoEnvio=".$array['MetodoEnvio'];
        $string = $string."\nCpfCnpjRemetente=".$array['CpfCnpjRemetente'];
        $string = $string."\nInscricaoMunicipalRemetente=".$array['InscricaoMunicipalRemetente'];
        $string = $string."\nRazaoSocialRemetente=".$array['RazaoSocialRemetente'];
        $string = $string."\nCodigoCidadeRemetente=".$array['CodigoCidadeRemetente'];
        $string = $string."\nDataInicio=".$array['DataInicio'];
        $string = $string."\nDataFim=".$array['DataFim'];
        $string = $string."\nValorTotalServicos=".$array['ValorTotalServicos'];
        $string = $string."\nValorTotalDeducoes=".$array['ValorTotalDeducoes'];
        $string = $string."\nValorTotalBaseCalculo=".$array['ValorTotalBaseCalculo'];
        $string = $string."\nSALVAR";
        $string = $string."\nINCLUIRRPS";
        $string = $string."\nIdIntegracao=".$array['IdIntegracao'];
        $string = $string."\nIdRps=".$array['IdRps'];
        $string = $string."\nSituacaoNota=".$array['SituacaoNota'];
        $string = $string."\nTipoRps=".$array['TipoRps'];
        $string = $string."\nSerieRps=".$array['SerieRps'];
        $string = $string."\nNumeroRps=".$array['NumeroRps'];
        $string = $string."\nDataEmissao=".$array['DataEmissao'];
        $string = $string."\nCompetencia=".$array['Competencia'];
        $string = $string."\nCpfCnpjPrestador=".$array['CpfCnpjPrestador'];
        $string = $string."\nInscricaoMunicipalPrestador=".$array['InscricaoMunicipalPrestador'];
        $string = $string."\nRazaoSocialPrestador=".$array['RazaoSocialPrestador'];
        $string = $string."\nCodigoCidadePrestacao=".$array['CodigoCidadePrestacao'];
        $string = $string."\nDescricaoCidadePrestacao=".$array['DescricaoCidadePrestacao'];
        $string = $string."\nOptanteSimplesNacional=".$array['OptanteSimplesNacional'];
        $string = $string."\nIncentivadorCultural=".$array['IncentivadorCultural'];
        $string = $string."\nIncentivoFiscal=".$array['IncentivoFiscal'];
        $string = $string."\nCpfCnpjTomador=".$array['CpfCnpjTomador'];
        $string = $string."\nRazaoSocialTomador=".$array['RazaoSocialTomador'];
        $string = $string."\nInscricaoEstadualTomador=".$array['InscricaoEstadualTomador'];
        $string = $string."\nTipoLogradouroTomador=".$array['TipoLogradouroTomador'];
        $string = $string."\nEnderecoTomador=".$array['EnderecoTomador'];
        $string = $string."\nNumeroTomador=".$array['NumeroTomador'];
        $string = $string."\nComplementoTomador=".$array['ComplementoTomador'];
        $string = $string."\nBairroTomador=".$array['BairroTomador'];
        $string = $string."\nCodigoCidadeTomador=".$array['CodigoCidadeTomador'];
        $string = $string."\nDescricaoCidadeTomador=".$array['DescricaoCidadeTomador'];
        $string = $string."\nCepTomador=".$array['CepTomador'];
        $string = $string."\nPaisTomador=".$array['PaisTomador'];
        $string = $string."\nDDDTomador=".$array['DddTomador'];
        $string = $string."\nTelefoneTomador=".$array['TelefoneTomador'];
        $string = $string."\nEmailTomador=".$array['EmailTomador'];
        $string = $string."\nUFTomador=".$array['UfTomador'];
        $string = $string."\nCodigoItemListaServico=".$array['CodigoItemListaServico'];
        $string = $string."\nCodigoTributacaoMunicipio=".$array['CodigoTributacaoMunicipio'];
        $string = $string."\nCodigoCnae=".$array['CodigoCnae'];
        $string = $string."\nDiscriminacaoServico=".$array['DiscriminacaoServico'];
        $string = $string."\nTipoTributacao=".$array['TipoTributacao'];
        $string = $string."\nExigibilidadeISS=".$array['ExigibilidadeISS'];
        $string = $string."\nOperacao=".$array['Operacao'];
        $string = $string."\nMunicipioIncidencia=".$array['MunicipioIncidencia'];

        $string = $string."\nValorServicos=".$array['ValorServicos'];
        $string = $string."\nAliquotaPIS=".$array['AliquotaPIS'];
        $string = $string."\nAliquotaCOFINS=".$array['AliquotaCOFINS'];
        $string = $string."\nAliquotaINSS=".$array['AliquotaINSS'];
        $string = $string."\nAliquotaIR=".$array['AliquotaIR'];
        $string = $string."\nAliquotaCSLL=".$array['AliquotaCSLL'];
        $string = $string."\nValorPIS=".$array['ValorPIS'];
        $string = $string."\nValorCOFINS=".$array['ValorCOFINS'];
        $string = $string."\nValorINSS=".$array['ValorINSS'];
        $string = $string."\nValorIR=".$array['ValorIR'];
        $string = $string."\nValorCSLL=".$array['ValorCSLL'];
        $string = $string."\nOutrasRetencoes=".$array['OutrasRetencoes'];
        $string = $string."\nDescontoIncondicionado=".$array['DescontoIncondicionado'];
        $string = $string."\nDescontoCondicionado=".$array['DescontoCondicionado'];
        $string = $string."\nValorDeducoes=".$array['ValorDeducoes'];
        $string = $string."\nBaseCalculo=".$array['BaseCalculo'];
        $string = $string."\nAliquotaISS=".$array['AliquotaISS'];
        $string = $string."\nValorIss=".$array['ValorIss'];
        $string = $string."\nIssRetido=".$array['IssRetido'];
        $string = $string."\nValorISSRetido=".$array['ValorISSRetido'];
        $string = $string."\nValorLiquidoNfse=".$array['ValorLiquidoNfse'];
        $string = $string."\nRegimeEspecialTributacao=".$array['RegimeEspecialTributacao'];
        $string = $string."\nNaturezaTributacao=".$array['NaturezaTributacao'];
        $string = $string."\nResponsavelRetencao=".$array['ResponsavelRetencao'];
        $string = $string."\nSALVARRPS";

        $this->setTx2($string);
    }


} 