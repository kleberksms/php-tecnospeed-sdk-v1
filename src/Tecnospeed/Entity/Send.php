<?php
namespace Tecnospeed\Entity;

use Tecnospeed\ManagerNf;


class Send extends ManagerNf
{

    /**
     * Dados padrão
     */
    private $idLote;
    private $numeroLote;
    private $quantidadeRPS;
    private $transacao;
    private $metodoEnvio;
    private $cpfCnpjRmetente;
    private $inscricaoMunicipalRemetente;
    private $razaoSocialRemetente;
    private $codigoCidadeRemetente;
    private $dataInicio;
    private $dataFim;
    private $valorTotalServicos;
    private $valorTotalDeducoes;
    private $valorTotalBasseCalculo;

    /**
     * Dados do RPS
     */

    private $idRps;
    private $situacaoNota;
    private $tipoRps;
    private $serieRps;
    private $numeroRps;
    private $dataEmissao;
    private $competencia;
    private $cpfCnpjPrestador;
    private $inscricaoMunicipalPrestador;
    private $razaoSocialPrestador;
    private $codigoCidadePrestador;
    private $descricaoCidadePrestador;
    private $optantesSimplesNascional;
    private $incentivadorCultural;
    private $regimeEspecialTributacao;
    private $naturezaTributacao;
    private $incentivoFiscal;

    /**
     * Tomador
     */
    private $cpfCnpjTomador;
    private $razaoSocialTomador;
    private $inscricaoEstadualTomador;
    private $tipoLogradouroTomador;
    private $enderecoTomador;
    private $numeroTomador;
    private $complementoTomador;
    private $tipoBairroTomador;
    private $bairroTomador;
    private $codigoCidadeTomador;
    private $descricaoCidadeTomador;
    private $ufTomador;
    private $cepTomador;
    private $paisTomador;
    private $dddTomador;
    private $telefoneTomador;
    private $emailTomador;

    private $codigoItemListaServico;
    private $codigoTributacaoServico;
    private $codigoTributacaoMunicipio;
    private $codigoCnae;
    private $discriminacaoServico;
    private $tipoTributacao;
    private $exigibilidadeISS;
    private $operacao;
    private $municipioIncidencia;


    private $aliquotaPIS;
    private $aliquotaCONFIS;
    private $aliquotaINSS;
    private $aliquotaIR;
    private $aliquotaCSLL;
    private $aliquotaISS;

    private $valorServicos;
    private $valorPIS;
    private $valorCONFIS;
    private $valorINSS;
    private $valorIR;
    private $valorCSLL;
    private $valorISS;

    private $outrasRetencoes;
    private $descontoIncondicionado;
    private $descontoCondicionado;

    private $valorDeducoes;
    private $baseCalculo;

    private $issRetido;
    private $valorISSRetido;
    private $valorLiquidoNFse;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


    /**
     * @return mixed
     */
    public function getPattern()
    {
        return $this->pattern;
    }

    /**
     * @param mixed $pattern
     */
    public function setPattern($pattern)
    {
        $this->pattern = $pattern;
    }

    /**
     * @return mixed
     */
    public function getAliquotaCONFIS()
    {
        return $this->aliquotaCONFIS;
    }

    /**
     * @param mixed $aliquotaCONFIS
     */
    public function setAliquotaCONFIS($aliquotaCONFIS)
    {
        $this->aliquotaCONFIS = $aliquotaCONFIS;
    }

    /**
     * @return mixed
     */
    public function getAliquotaCSLL()
    {
        return $this->aliquotaCSLL;
    }

    /**
     * @param mixed $aliquotaCSLL
     */
    public function setAliquotaCSLL($aliquotaCSLL)
    {
        $this->aliquotaCSLL = $aliquotaCSLL;
    }

    /**
     * @return mixed
     */
    public function getAliquotaINSS()
    {
        return $this->aliquotaINSS;
    }

    /**
     * @param mixed $aliquotaINSS
     */
    public function setAliquotaINSS($aliquotaINSS)
    {
        $this->aliquotaINSS = $aliquotaINSS;
    }

    /**
     * @return mixed
     */
    public function getAliquotaIR()
    {
        return $this->aliquotaIR;
    }

    /**
     * @param mixed $aliquotaIR
     */
    public function setAliquotaIR($aliquotaIR)
    {
        $this->aliquotaIR = $aliquotaIR;
    }

    /**
     * @return mixed
     */
    public function getAliquotaISS()
    {
        return $this->aliquotaISS;
    }

    /**
     * @param mixed $aliquotaISS
     */
    public function setAliquotaISS($aliquotaISS)
    {
        $this->aliquotaISS = $aliquotaISS;
    }

    /**
     * @return mixed
     */
    public function getAliquotaPIS()
    {
        return $this->aliquotaPIS;
    }

    /**
     * @param mixed $aliquotaPIS
     */
    public function setAliquotaPIS($aliquotaPIS)
    {
        $this->aliquotaPIS = $aliquotaPIS;
    }

    /**
     * @return mixed
     */
    public function getBairroTomador()
    {
        return $this->bairroTomador;
    }

    /**
     * @param mixed $bairroTomador
     */
    public function setBairroTomador($bairroTomador)
    {
        $this->bairroTomador = $bairroTomador;
    }

    /**
     * @return mixed
     */
    public function getBaseCalculo()
    {
        return $this->baseCalculo;
    }

    /**
     * @param mixed $baseCalculo
     */
    public function setBaseCalculo($baseCalculo)
    {
        $this->baseCalculo = $baseCalculo;
    }

    /**
     * @return mixed
     */
    public function getCepTomador()
    {
        return $this->cepTomador;
    }

    /**
     * @param mixed $cepTomador
     */
    public function setCepTomador($cepTomador)
    {
        $this->cepTomador = $cepTomador;
    }

    /**
     * @return mixed
     */
    public function getCodigoCidadePrestador()
    {
        return $this->codigoCidadePrestador;
    }

    /**
     * @param mixed $codigoCidadePrestador
     */
    public function setCodigoCidadePrestador($codigoCidadePrestador)
    {
        $this->codigoCidadePrestador = $codigoCidadePrestador;
    }

    /**
     * @return mixed
     */
    public function getCodigoCidadeRemetente()
    {
        return $this->codigoCidadeRemetente;
    }

    /**
     * @param mixed $codigoCidadeRemetente
     */
    public function setCodigoCidadeRemetente($codigoCidadeRemetente)
    {
        $this->codigoCidadeRemetente = $codigoCidadeRemetente;
    }

    /**
     * @return mixed
     */
    public function getCodigoCidadeTomador()
    {
        return $this->codigoCidadeTomador;
    }

    /**
     * @param mixed $codigoCidadeTomador
     */
    public function setCodigoCidadeTomador($codigoCidadeTomador)
    {
        $this->codigoCidadeTomador = $codigoCidadeTomador;
    }

    /**
     * @return mixed
     */
    public function getCodigoCnae()
    {
        return $this->codigoCnae;
    }

    /**
     * @param mixed $codigoCnae
     */
    public function setCodigoCnae($codigoCnae)
    {
        $this->codigoCnae = $codigoCnae;
    }

    /**
     * @return mixed
     */
    public function getCodigoItemListaServico()
    {
        return $this->codigoItemListaServico;
    }

    /**
     * @param mixed $codigoItemListaServico
     */
    public function setCodigoItemListaServico($codigoItemListaServico)
    {
        $this->codigoItemListaServico = $codigoItemListaServico;
    }

    /**
     * @return mixed
     */
    public function getCodigoTributacaoMunicipio()
    {
        return $this->codigoTributacaoMunicipio;
    }

    /**
     * @param mixed $codigoTributacaoMunicipio
     */
    public function setCodigoTributacaoMunicipio($codigoTributacaoMunicipio)
    {
        if (!is_numeric($codigoTributacaoMunicipio)) {
            throw new \InvalidArgumentException('this value is not a number');
        }
        $this->codigoTributacaoMunicipio = $codigoTributacaoMunicipio;
    }

    /**
     * @return mixed
     */
    public function getCodigoTributacaoServico()
    {
        return $this->codigoTributacaoServico;
    }

    /**
     * @param mixed $codigoTributacaoServico
     */
    public function setCodigoTributacaoServico($codigoTributacaoServico)
    {
        $this->codigoTributacaoServico = $codigoTributacaoServico;
    }

    /**
     * @return mixed
     */
    public function getCompetencia()
    {
        return $this->competencia;
    }

    /**
     * @param mixed $competencia
     */
    public function setCompetencia($competencia)
    {
        $this->competencia = $competencia;
    }

    /**
     * @return mixed
     */
    public function getComplementoTomador()
    {
        return $this->complementoTomador;
    }

    /**
     * @param mixed $complementoTomador
     */
    public function setComplementoTomador($complementoTomador)
    {
        $this->complementoTomador = $complementoTomador;
    }

    /**
     * @return mixed
     */
    public function getCpfCnpjPrestador()
    {
        return $this->cpfCnpjPrestador;
    }

    /**
     * @param mixed $cpfCnpjPrestador
     */
    public function setCpfCnpjPrestador($cpfCnpjPrestador)
    {
        $this->cpfCnpjPrestador = $cpfCnpjPrestador;
    }

    /**
     * @return mixed
     */
    public function getCpfCnpjRmetente()
    {
        return $this->cpfCnpjRmetente;
    }

    /**
     * @param mixed $cpfCnpjRmetente
     */
    public function setCpfCnpjRmetente($cpfCnpjRmetente)
    {
        $this->cpfCnpjRmetente = $cpfCnpjRmetente;
    }

    /**
     * @return mixed
     */
    public function getCpfCnpjTomador()
    {
        return $this->cpfCnpjTomador;
    }

    /**
     * @param mixed $cpfCnpjTomador
     */
    public function setCpfCnpjTomador($cpfCnpjTomador)
    {
        $this->cpfCnpjTomador = $cpfCnpjTomador;
    }

    /**
     * @return mixed
     */
    public function getDataEmissao()
    {
        return $this->dataEmissao;
    }

    /**
     * @param mixed $dataEmissao
     */
    public function setDataEmissao($dataEmissao)
    {
        $this->dataEmissao = $dataEmissao;
    }

    /**
     * @return mixed
     */
    public function getDataFim()
    {
        return $this->dataFim;
    }

    /**
     * @param mixed $dataFim
     */
    public function setDataFim($dataFim)
    {
        $this->dataFim = $dataFim;
    }

    /**
     * @return mixed
     */
    public function getDataInicio()
    {
        return $this->dataInicio;
    }

    /**
     * @param mixed $dataInicio
     */
    public function setDataInicio($dataInicio)
    {
        $this->dataInicio = $dataInicio;
    }

    /**
     * @return mixed
     */
    public function getDddTomador()
    {
        return $this->dddTomador;
    }

    /**
     * @param mixed $dddTomador
     */
    public function setDddTomador($dddTomador)
    {
        if (strlen($dddTomador) != 2) {
    throw new \InvalidArgumentException('Invalid ddd number');
        }
        $this->dddTomador = $dddTomador;
    }

    /**
     * @return mixed
     */
    public function getDescontoCondicionado()
    {
        return $this->descontoCondicionado;
    }

    /**
     * @param mixed $descontoCondicionado
     */
    public function setDescontoCondicionado($descontoCondicionado)
    {
        $this->descontoCondicionado = $descontoCondicionado;
    }

    /**
     * @return mixed
     */
    public function getDescontoIncondicionado()
    {
        return $this->descontoIncondicionado;
    }

    /**
     * @param mixed $descontoIncondicionado
     */
    public function setDescontoIncondicionado($descontoIncondicionado)
    {
        $this->descontoIncondicionado = $descontoIncondicionado;
    }

    /**
     * @return mixed
     */
    public function getDescricaoCidadePrestador()
    {
        return $this->descricaoCidadePrestador;
    }

    /**
     * @param mixed $descricaoCidadePrestador
     */
    public function setDescricaoCidadePrestador($descricaoCidadePrestador)
    {
        $this->descricaoCidadePrestador = $descricaoCidadePrestador;
    }

    /**
     * @return mixed
     */
    public function getDescricaoCidadeTomador()
    {
        return $this->descricaoCidadeTomador;
    }

    /**
     * @param mixed $descricaoCidadeTomador
     */
    public function setDescricaoCidadeTomador($descricaoCidadeTomador)
    {
        $this->descricaoCidadeTomador = $descricaoCidadeTomador;
    }

    /**
     * @return mixed
     */
    public function getDiscriminacaoServico()
    {
        return $this->discriminacaoServico;
    }

    /**
     * @param mixed $discriminacaoServico
     */
    public function setDiscriminacaoServico($discriminacaoServico)
    {
        $this->discriminacaoServico = $discriminacaoServico;
    }

    /**
     * @return mixed
     */
    public function getEmailTomador()
    {
        return $this->emailTomador;
    }

    /**
     * @param mixed $emailTomador
     */
    public function setEmailTomador($emailTomador)
    {
        $this->emailTomador = $emailTomador;
    }

    /**
     * @return mixed
     */
    public function getEnderecoTomador()
    {
        return $this->enderecoTomador;
    }

    /**
     * @param mixed $enderecoTomador
     */
    public function setEnderecoTomador($enderecoTomador)
    {
        $this->enderecoTomador = $enderecoTomador;
    }

    /**
     * @return mixed
     */
    public function getExigibilidadeISS()
    {
        return $this->exigibilidadeISS;
    }

    /**
     * @param mixed $exigibilidadeISS
     *
     * Informação referente ao pagamento de ISS :
     * 1 - Exigível
     * 2 - Não incidência
     * 3 - Isenção
     * 4 - Exportação
     * 5 - Imunidade
     * 6 - Exigibilidade Suspensa por Decisão Judicial
     * 7 - Exigibilidade Suspensa por Processo Administrativo.
     */
    public function setExigibilidadeISS($exigibilidadeISS)
    {
        if (!in_array( $exigibilidadeISS , range( 1 , 7 ) )) {
            throw new \InvalidArgumentException('Invalid Argument, choice between 1 and 7');
        }
        $this->exigibilidadeISS = $exigibilidadeISS;
    }

    /**
     * @return mixed
     */
    public function getIdLote()
    {
        return $this->idLote;
    }

    /**
     * @param mixed $idLote
     */
    public function setIdLote($idLote)
    {
        if (!is_numeric($idLote)) {
            throw new \InvalidArgumentException('Invalid Argument');
        }
        $this->idLote = $idLote;

    }

    /**
     * @return mixed
     */
    public function getIdRps()
    {
        return $this->idRps;
    }

    /**
     * @param mixed $idRps
     */
    public function setIdRps($idRps)
    {
        $this->idRps = $idRps;
    }

    /**
     * @return mixed
     */
    public function getIncentivadorCultural()
    {
        return $this->incentivadorCultural;
    }

    /**
     * @param mixed $incentivadorCultural
     */
    public function setIncentivadorCultural($incentivadorCultural)
    {
        $this->incentivadorCultural = $incentivadorCultural;
    }

    /**
     * @return mixed
     */
    public function getIncentivoFiscal()
    {
        return $this->incentivoFiscal;
    }

    /**
     * @param mixed $incentivoFiscal
     */
    public function setIncentivoFiscal($incentivoFiscal)
    {
        $this->incentivoFiscal = $incentivoFiscal;
    }

    /**
     * @return mixed
     */
    public function getInscricaoEstadualTomador()
    {
        return $this->inscricaoEstadualTomador;
    }

    /**
     * @param mixed $inscricaoEstadualTomador
     */
    public function setInscricaoEstadualTomador($inscricaoEstadualTomador)
    {
        $this->inscricaoEstadualTomador = $inscricaoEstadualTomador;
    }

    /**
     * @return mixed
     */
    public function getInscricaoMunicipalPrestador()
    {
        return $this->inscricaoMunicipalPrestador;
    }

    /**
     * @param mixed $inscricaoMunicipalPrestador
     */
    public function setInscricaoMunicipalPrestador($inscricaoMunicipalPrestador)
    {
        $this->inscricaoMunicipalPrestador = $inscricaoMunicipalPrestador;
    }

    /**
     * @return mixed
     */
    public function getInscricaoMunicipalRemetente()
    {
        return $this->inscricaoMunicipalRemetente;
    }

    /**
     * @param mixed $inscricaoMunicipalRemetente
     */
    public function setInscricaoMunicipalRemetente($inscricaoMunicipalRemetente)
    {
        $this->inscricaoMunicipalRemetente = $inscricaoMunicipalRemetente;
    }

    /**
     * @return mixed
     */
    public function getIssRetido()
    {
        return $this->issRetido;
    }

    /**
     * @param mixed $issRetido
     */
    public function setIssRetido($issRetido)
    {
        $this->issRetido = $issRetido;
    }

    /**
     * @return mixed
     */
    public function getMetodoEnvio()
    {
        return $this->metodoEnvio;
    }

    /**
     * @param mixed $metodoEnvio
     */
    public function setMetodoEnvio($metodoEnvio)
    {
        $this->metodoEnvio = $metodoEnvio;
    }

    /**
     * @return mixed
     */
    public function getMunicipioIncidencia()
    {
        return $this->municipioIncidencia;
    }

    /**
     * @param mixed $municipioIncidencia
     */
    public function setMunicipioIncidencia($municipioIncidencia)
    {
        $this->municipioIncidencia = $municipioIncidencia;
    }

    /**
     * @return mixed
     */
    public function getNaturezaTributacao()
    {
        return $this->naturezaTributacao;
    }

    /**
     * @param mixed $naturezaTributacao
     */
    public function setNaturezaTributacao($naturezaTributacao)
    {
        $this->naturezaTributacao = $naturezaTributacao;
    }

    /**
     * @return mixed
     */
    public function getNumeroLote()
    {
        return $this->numeroLote;
    }

    /**
     * @param mixed $numeroLote
     */
    public function setNumeroLote($numeroLote)
    {
        $this->numeroLote = $numeroLote;
    }

    /**
     * @return mixed
     */
    public function getNumeroRps()
    {
        return $this->numeroRps;
    }

    /**
     * @param mixed $numeroRps
     */
    public function setNumeroRps($numeroRps)
    {
        $this->numeroRps = $numeroRps;
    }

    /**
     * @return mixed
     */
    public function getNumeroTomador()
    {
        return $this->numeroTomador;
    }

    /**
     * @param mixed $numeroTomador
     */
    public function setNumeroTomador($numeroTomador)
    {
        $this->numeroTomador = $numeroTomador;
    }

    /**
     * @return mixed
     */
    public function getOperacao()
    {
        return $this->operacao;
    }

    /**
     * @param mixed $operacao
     */
    public function setOperacao($operacao)
    {
        $this->operacao = $operacao;
    }

    /**
     * @return mixed
     */
    public function getOptantesSimplesNascional()
    {
        return $this->optantesSimplesNascional;
    }

    /**
     * @param mixed $optantesSimplesNascional
     */
    public function setOptantesSimplesNascional($optantesSimplesNascional)
    {
        $this->optantesSimplesNascional = $optantesSimplesNascional;
    }

    /**
     * @return mixed
     */
    public function getOutrasRetencoes()
    {
        return $this->outrasRetencoes;
    }

    /**
     * @param mixed $outrasRetencoes
     */
    public function setOutrasRetencoes($outrasRetencoes)
    {
        $this->outrasRetencoes = $outrasRetencoes;
    }

    /**
     * @return mixed
     */
    public function getPaisTomador()
    {
        return $this->paisTomador;
    }

    /**
     * @param mixed $paisTomador
     */
    public function setPaisTomador($paisTomador)
    {
        $this->paisTomador = $paisTomador;
    }

    /**
     * @return mixed
     */
    public function getQuantidadeRPS()
    {
        return $this->quantidadeRPS;
    }

    /**
     * @param mixed $quantidadeRPS
     */
    public function setQuantidadeRPS($quantidadeRPS)
    {
        $this->quantidadeRPS = $quantidadeRPS;
    }

    /**
     * @return mixed
     */
    public function getRazaoSocialPrestador()
    {
        return $this->razaoSocialPrestador;
    }

    /**
     * @param mixed $razaoSocialPrestador
     */
    public function setRazaoSocialPrestador($razaoSocialPrestador)
    {
        $this->razaoSocialPrestador = $razaoSocialPrestador;
    }

    /**
     * @return mixed
     */
    public function getRazaoSocialRemetente()
    {
        return $this->razaoSocialRemetente;
    }

    /**
     * @param mixed $razaoSocialRemetente
     */
    public function setRazaoSocialRemetente($razaoSocialRemetente)
    {
        $this->razaoSocialRemetente = $razaoSocialRemetente;
    }

    /**
     * @return mixed
     */
    public function getRazaoSocialTomador()
    {
        return $this->razaoSocialTomador;
    }

    /**
     * @param mixed $razaoSocialTomador
     */
    public function setRazaoSocialTomador($razaoSocialTomador)
    {
        $this->razaoSocialTomador = $razaoSocialTomador;
    }

    /**
     * @return mixed
     */
    public function getRegimeEspecialTributacao()
    {
        return $this->regimeEspecialTributacao;
    }

    /**
     * @param mixed $regimeEspecialTributacao
     */
    public function setRegimeEspecialTributacao($regimeEspecialTributacao)
    {
        $this->regimeEspecialTributacao = $regimeEspecialTributacao;
    }

    /**
     * @return mixed
     */
    public function getSerieRps()
    {
        return $this->serieRps;
    }

    /**
     * @param mixed $serieRps
     */
    public function setSerieRps($serieRps)
    {
        $this->serieRps = $serieRps;
    }

    /**
     * @return mixed
     */
    public function getSituacaoNota()
    {
        return $this->situacaoNota;
    }

    /**
     * @param mixed $situacaoNota
     */
    public function setSituacaoNota($situacaoNota)
    {
        $this->situacaoNota = $situacaoNota;
    }

    /**
     * @return mixed
     */
    public function getTelefoneTomador()
    {
        return $this->telefoneTomador;
    }

    /**
     * @param mixed $telefoneTomador
     */
    public function setTelefoneTomador($telefoneTomador)
    {
        $this->telefoneTomador = $telefoneTomador;
    }

    /**
     * @return mixed
     */
    public function getTipoBairroTomador()
    {
        return $this->tipoBairroTomador;
    }

    /**
     * @param mixed $tipoBairroTomador
     */
    public function setTipoBairroTomador($tipoBairroTomador)
    {
        $this->tipoBairroTomador = $tipoBairroTomador;
    }

    /**
     * @return mixed
     */
    public function getTipoLogradouroTomador()
    {
        return $this->tipoLogradouroTomador;
    }

    /**
     * @param mixed $tipoLogradouroTomador
     */
    public function setTipoLogradouroTomador($tipoLogradouroTomador)
    {
        $this->tipoLogradouroTomador = $tipoLogradouroTomador;
    }

    /**
     * @return mixed
     */
    public function getTipoRps()
    {
        return $this->tipoRps;
    }

    /**
     * @param mixed $tipoRps
     */
    public function setTipoRps($tipoRps)
    {
        $this->tipoRps = $tipoRps;
    }

    /**
     * @return mixed
     */
    public function getTipoTributacao()
    {
        return $this->tipoTributacao;
    }

    /**
     * @param mixed $tipoTributacao
     */
    public function setTipoTributacao($tipoTributacao)
    {
        $this->tipoTributacao = $tipoTributacao;
    }

    /**
     * @return mixed
     */
    public function getTransacao()
    {
        return $this->transacao;
    }

    /**
     * @param mixed $transacao
     */
    public function setTransacao($transacao)
    {
        $this->transacao = $transacao;
    }

    /**
     * @return mixed
     */
    public function getUfTomador()
    {
        return $this->ufTomador;
    }

    /**
     * @param mixed $ufTomador
     */
    public function setUfTomador($ufTomador)
    {
        $this->ufTomador = $ufTomador;
    }

    /**
     * @return mixed
     */
    public function getValorCONFIS()
    {
        return $this->valorCONFIS;
    }

    /**
     * @param mixed $valorCONFIS
     */
    public function setValorCONFIS($valorCONFIS)
    {
        $this->valorCONFIS = $valorCONFIS;
    }

    /**
     * @return mixed
     */
    public function getValorCSLL()
    {
        return $this->valorCSLL;
    }

    /**
     * @param mixed $valorCSLL
     */
    public function setValorCSLL($valorCSLL)
    {
        $this->valorCSLL = $valorCSLL;
    }

    /**
     * @return mixed
     */
    public function getValorDeducoes()
    {
        return $this->valorDeducoes;
    }

    /**
     * @param mixed $valorDeducoes
     */
    public function setValorDeducoes($valorDeducoes)
    {
        $this->valorDeducoes = $valorDeducoes;
    }

    /**
     * @return mixed
     */
    public function getValorINSS()
    {
        return $this->valorINSS;
    }

    /**
     * @param mixed $valorINSS
     */
    public function setValorINSS($valorINSS)
    {
        $this->valorINSS = $valorINSS;
    }

    /**
     * @return mixed
     */
    public function getValorIR()
    {
        return $this->valorIR;
    }

    /**
     * @param mixed $valorIR
     */
    public function setValorIR($valorIR)
    {
        $this->valorIR = $valorIR;
    }

    /**
     * @return mixed
     */
    public function getValorISS()
    {
        return $this->valorISS;
    }

    /**
     * @param mixed $valorISS
     */
    public function setValorISS($valorISS)
    {
        $this->valorISS = $valorISS;
    }

    /**
     * @return mixed
     */
    public function getValorISSRetido()
    {
        return $this->valorISSRetido;
    }

    /**
     * @param mixed $valorISSRetido
     */
    public function setValorISSRetido($valorISSRetido)
    {
        $this->valorISSRetido = $valorISSRetido;
    }

    /**
     * @return mixed
     */
    public function getValorLiquidoNFse()
    {
        return $this->valorLiquidoNFse;
    }

    /**
     * @param mixed $valorLiquidoNFse
     */
    public function setValorLiquidoNFse($valorLiquidoNFse)
    {
        $this->valorLiquidoNFse = $valorLiquidoNFse;
    }

    /**
     * @return mixed
     */
    public function getValorPIS()
    {
        return $this->valorPIS;
    }

    /**
     * @param mixed $valorPIS
     */
    public function setValorPIS($valorPIS)
    {
        $this->valorPIS = $valorPIS;
    }

    /**
     * @return mixed
     */
    public function getValorServicos()
    {
        return $this->valorServicos;
    }

    /**
     * @param mixed $valorServicos
     */
    public function setValorServicos($valorServicos)
    {
        $this->valorServicos = $valorServicos;
    }

    /**
     * @return mixed
     */
    public function getValorTotalBasseCalculo()
    {
        return $this->valorTotalBasseCalculo;
    }

    /**
     * @param mixed $valorTotalBasseCalculo
     */
    public function setValorTotalBasseCalculo($valorTotalBasseCalculo)
    {
        $this->valorTotalBasseCalculo = $valorTotalBasseCalculo;
    }

    /**
     * @return mixed
     */
    public function getValorTotalDeducoes()
    {
        return $this->valorTotalDeducoes;
    }

    /**
     * @param mixed $valorTotalDeducoes
     */
    public function setValorTotalDeducoes($valorTotalDeducoes)
    {
        $this->valorTotalDeducoes = $valorTotalDeducoes;
    }

    /**
     * @return mixed
     */
    public function getValorTotalServicos()
    {
        return $this->valorTotalServicos;
    }

    /**
     * @param mixed $valorTotalServicos
     */
    public function setValorTotalServicos($valorTotalServicos)
    {
        $this->valorTotalServicos = $valorTotalServicos;
    }

} 