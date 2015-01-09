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



    public function convert(array $data)
    {
        $array = $this->normalizeArray($data);
        $this->setTx2("
        formato={$array['Formato']}
        padrao={$array['Padrao']}
        NomeCidade={$array['NomeCidade']}

        INCLUIR
        IDLote={$array['IdLote']}
        NumeroLote={$array['NumeroLote']}
        QuantidadeRPS={$array['QuantidadeRPS']}
        Transacao={$array['Transacao']}
        MetodoEnvio={$array['MetodoEnvio']}
        CpfCnpjRemetente={$array['CpfCnpjRemetente']}
        InscricaoMunicipalRemetente={$array['InscricaoMunicipalRemetente']}
        RazaoSocialRemetente={$array['RazaoSocialRemetente']}
        CodigoCidadeRemetente={$array['CodigoCidadeRemetente']}
        DataInicio={$array['DataInicio']}
        DataFim={$array['DataFim']}
        ValorTotalServicos={$array['ValorTotalServicos']}
        ValorTotalDeducoes={$array['ValorTotalDeducoes']}
        ValorTotalBaseCalculo={$array['ValorTotalBaseCalculo']}
        SALVAR

        INCLUIRRPS
        IdRps={$array['IdRps']}
        SituacaoNota={$array['SituacaoNota']}
        TipoRps={$array['TipoRps']}
        SerieRps={$array['SerieRps']}
        NumeroRps={$array['NumeroRps']}
        DataEmissao={$array['DataEmissao']}
        Competencia={$array['Competencia']}
        CpfCnpjPrestador={$array['CpfCnpjPrestador']}
        InscricaoMunicipalPrestador={$array['InscricaoMunicipalPrestador']}
        RazaoSocialPrestador={$array['RazaoSocialPrestador']}
        CodigoCidadePrestacao={$array['CodigoCidadePrestacao']}
        DescricaoCidadePrestacao={$array['DescricaoCidadePrestacao']}
        OptanteSimplesNacional={$array['OptanteSimplesNacional']}
        IncentivadorCultural={$array['IncentivadorCultural']}
        RegimeEspecialTributacao={$array['RegimeEspecialTributacao']}
        NaturezaTributacao={$array['NaturezaTributacao']}
        IncentivoFiscal={$array['IncentivoFiscal']}
        CpfCnpjTomador={$array['CpfCnpjTomador']}
        RazaoSocialTomador={$array['RazaoSocialTomador']}
        InscricaoEstadualTomador={$array['InscricaoEstadualTomador']}
        TipoLogradouroTomador={$array['TipoLogradouroTomador']}
        EnderecoTomador={$array['EnderecoTomador']}
        NumeroTomador={$array['NumeroTomador']}
        ComplementoTomador={$array['ComplementoTomador']}
        TipoBairroTomador={$array['TipoBairroTomador']}
        BairroTomador={$array['BairroTomador']}
        CodigoCidadeTomador={$array['CodigoCidadeTomador']}
        DescricaoCidadeTomador={$array['DescricaoCidadeTomador']}
        UfTomador={$array['UfTomador']}
        CepTomador={$array['CepTomador']}
        PaisTomador={$array['PaisTomador']}
        DDDTomador={$array['DddTomador']}
        TelefoneTomador={$array['TelefoneTomador']}
        EmailTomador={$array['EmailTomador']}
        CodigoItemListaServico={$array['CodigoItemListaServico']}
        CodigoTributacaoMunicipio={$array['CodigoTributacaoMunicipio']}
        CodigoCnae={$array['CodigoCnae']}
        DiscriminacaoServico={$array['DiscriminacaoServico']}
        TipoTributacao={$array['TipoTributacao']}
        ExigibilidadeISS={$array['ExigibilidadeISS']}
        Operacao={$array['Operacao']}
        MunicipioIncidencia={$array['MunicipioIncidencia']}
        ValorServicos={$array['ValorServicos']}
        AliquotaPIS={$array['AliquotaPIS']}
        AliquotaCOFINS={$array['AliquotaCOFINS']}
        AliquotaINSS={$array['AliquotaINSS']}
        AliquotaIR={$array['AliquotaIR']}
        AliquotaCSLL={$array['AliquotaCSLL']}
        ValorPIS={$array['ValorPIS']}
        ValorCOFINS={$array['ValorCOFINS']}
        ValorINSS={$array['ValorINSS']}
        ValorIR={$array['ValorIR']}
        ValorCSLL={$array['ValorCSLL']}
        OutrasRetencoes={$array['OutrasRetencoes']}
        DescontoIncondicionado={$array['DescontoIncondicionado']}
        DescontoCondicionado={$array['DescontoCondicionado']}
        ValorDeducoes={$array['ValorDeducoes']}
        BaseCalculo={$array['BaseCalculo']}
        AliquotaISS={$array['AliquotaISS']}
        ValorIss={$array['ValorIss']}
        IssRetido={$array['IssRetido']}
        ValorISSRetido={$array['ValorISSRetido']}
        ValorLiquidoNfse={$array['ValorLiquidoNfse']}
        SALVARRPS
        ");
    }


} 