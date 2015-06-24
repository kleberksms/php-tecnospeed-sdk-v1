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
        $array   = $this->normalizeArray($data);

        $string  = "formato="						.$array['Formato'];
        $string .= "\npadrao="						.$array['Padrao'];
        $string .= "\nNomeCidade="					.$array['NomeCidade'];
        $string .= "\nINCLUIR";
        $string .= "\nIDLote="						.$array['IdLote'];
        $string .= "\nversao="						.$array['Versao'];
        $string .= "\nNumeroLote="					.$array['NumeroLote'];
        $string .= "\nQuantidadeRPS="				.$array['QuantidadeRPS'];
        $string .= ($array['Transacao'] === true) ? "\nTransacao=true" : "\nTransacao=false";
        $string .= "\nMetodoEnvio="					.$array['MetodoEnvio'];
        $string .= "\nCpfCnpjRemetente="			.$array['CpfCnpjRemetente'];
        $string .= "\nInscricaoMunicipalRemetente="	.$array['InscricaoMunicipalRemetente'];
        $string .= "\nRazaoSocialRemetente="		.$array['RazaoSocialRemetente'];
        $string .= "\nCodigoCidadeRemetente="		.$array['CodigoCidadeRemetente'];
        $string .= "\nDataInicio="					.$array['DataInicio'];
        $string .= "\nDataFim="						.$array['DataFim'];
        $string .= "\nValorTotalServicos="			.$array['ValorTotalServicos'];
        $string .= "\nValorTotalDeducoes="			.$array['ValorTotalDeducoes'];
        $string .= "\nValorTotalBaseCalculo="		.$array['ValorTotalBaseCalculo'];
        $string .= "\nSALVAR";
        $string .= "\nINCLUIRRPS";
        $string .= "\nIdIntegracao="				.$array['IdIntegracao'];
        $string .= "\nIdRps="						.$array['IdRps'];
        $string .= "\nSituacaoNota="				.$array['SituacaoNota'];
        $string .= "\nTipoRps="						.$array['TipoRps'];
        $string .= "\nSerieRps="					.$array['SerieRps'];
        $string .= "\nNumeroRps="					.$array['NumeroRps'];
        $string .= "\nDataEmissao="					.$array['DataEmissao'];
        $string .= "\nCompetencia="					.$array['Competencia'];
        $string .= "\nCpfCnpjPrestador="			.$array['CpfCnpjPrestador'];
        $string .= "\nInscricaoMunicipalPrestador="	.$array['InscricaoMunicipalPrestador'];
        $string .= "\nRazaoSocialPrestador="		.$array['RazaoSocialPrestador'];
        $string .= "\nCodigoCidadePrestacao="		.$array['CodigoCidadePrestacao'];
        $string .= "\nDescricaoCidadePrestacao="	.$array['DescricaoCidadePrestacao'];
        $string .= "\nOptanteSimplesNacional="		.$array['OptanteSimplesNacional'];
        $string .= "\nIncentivadorCultural="		.$array['IncentivadorCultural'];
        $string .= "\nIncentivoFiscal="				.$array['IncentivoFiscal'];
        $string .= "\nCpfCnpjTomador="				.$array['CpfCnpjTomador'];
        $string .= "\nRazaoSocialTomador="			.$array['RazaoSocialTomador'];
        $string .= "\nInscricaoEstadualTomador="	.$array['InscricaoEstadualTomador'];
        $string .= "\nTipoLogradouroTomador="		.$array['TipoLogradouroTomador'];
        $string .= "\nEnderecoTomador="				.$array['EnderecoTomador'];
        $string .= "\nNumeroTomador="				.$array['NumeroTomador'];
        $string .= "\nComplementoTomador="			.$array['ComplementoTomador'];
        $string .= "\nBairroTomador="				.$array['BairroTomador'];
        $string .= "\nCodigoCidadeTomador="			.$array['CodigoCidadeTomador'];
        $string .= "\nDescricaoCidadeTomador="		.$array['DescricaoCidadeTomador'];
        $string .= "\nCepTomador="					.$array['CepTomador'];
        $string .= "\nPaisTomador="					.$array['PaisTomador'];
        $string .= "\nDDDTomador="					.$array['DddTomador'];
        $string .= "\nTelefoneTomador="				.$array['TelefoneTomador'];
        $string .= "\nEmailTomador="				.$array['EmailTomador'];
        $string .= "\nUFTomador="					.$array['UfTomador'];
        $string .= "\nCodigoItemListaServico="		.$array['CodigoItemListaServico'];
        $string .= "\nCodigoTributacaoMunicipio="	.$array['CodigoTributacaoMunicipio'];
        $string .= "\nCodigoCnae="					.$array['CodigoCnae'];
        $string .= "\nDiscriminacaoServico="		.$array['DiscriminacaoServico'];
        $string .= "\nTipoTributacao="				.$array['TipoTributacao'];
        $string .= "\nExigibilidadeISS="			.$array['ExigibilidadeISS'];
        $string .= "\nOperacao="					.$array['Operacao'];
        $string .= "\nMunicipioIncidencia="			.$array['MunicipioIncidencia'];
        $string .= "\nValorServicos="				.$array['ValorServicos'];
        $string .= "\nAliquotaPIS="					.$array['AliquotaPIS'];
        $string .= "\nAliquotaCOFINS="				.$array['AliquotaCOFINS'];
        $string .= "\nAliquotaINSS="				.$array['AliquotaINSS'];
        $string .= "\nAliquotaIR="					.$array['AliquotaIR'];
        $string .= "\nAliquotaCSLL="				.$array['AliquotaCSLL'];
        $string .= "\nValorPIS="					.$array['ValorPIS'];
        $string .= "\nValorCOFINS="					.$array['ValorCOFINS'];
        $string .= "\nValorINSS="					.$array['ValorINSS'];
        $string .= "\nValorIR="						.$array['ValorIR'];
        $string .= "\nValorCSLL="					.$array['ValorCSLL'];
        $string .= "\nOutrasRetencoes="				.$array['OutrasRetencoes'];
        $string .= "\nDescontoIncondicionado="		.$array['DescontoIncondicionado'];
        $string .= "\nDescontoCondicionado="		.$array['DescontoCondicionado'];
        $string .= "\nValorDeducoes="				.$array['ValorDeducoes'];
        $string .= "\nBaseCalculo="					.$array['BaseCalculo'];
        $string .= "\nAliquotaISS="					.$array['AliquotaISS'];
        $string .= "\nValorIss="					.$array['ValorIss'];
        $string .= "\nIssRetido="					.$array['IssRetido'];
        $string .= "\nValorISSRetido="				.$array['ValorISSRetido'];
        $string .= "\nValorLiquidoNfse="			.$array['ValorLiquidoNfse'];
        $string .= "\nRegimeEspecialTributacao="	.$array['RegimeEspecialTributacao'];
        $string .= "\nNaturezaTributacao="			.$array['NaturezaTributacao'];
        $string .= "\nResponsavelRetencao="			.$array['ResponsavelRetencao'];
        $string .= "\nSALVARRPS";

        $this->setTx2($string);
    }
}