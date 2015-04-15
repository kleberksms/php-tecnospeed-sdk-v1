<?php

namespace Tecnospeed\Entity;

class Send
{

    private $formato;
    private $padrao;
    private $nomeCidade;
    /**
     * Dados padrão
     */
    private $idLote;
    private $versao;

    private $numeroLote;
    private $quantidadeRPS;
    private $transacao;
    private $metodoEnvio;
    private $cpfCnpjRemetente;
    private $inscricaoMunicipalRemetente;
    private $razaoSocialRemetente;
    private $codigoCidadeRemetente;
    private $dataInicio;
    private $dataFim;
    private $valorTotalServicos;
    private $valorTotalDeducoes;
    private $valorTotalBaseCalculo;

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
    private $codigoCidadePrestacao;
    private $descricaoCidadePrestacao;
    private $optanteSimplesNacional;
    private $incentivadorCultural;
    private $incentivoFiscal;
    private $regimeEspecialTributacao;
    private $naturezaTributacao;

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
    private $codigoTributacaoMunicipio;
    private $codigoCnae;
    private $discriminacaoServico;
    private $tipoTributacao;
    private $exigibilidadeISS;
    private $operacao;
    private $municipioIncidencia;


    private $aliquotaPIS;
    private $aliquotaCOFINS;
    private $aliquotaINSS;
    private $aliquotaIR;
    private $aliquotaCSLL;
    private $aliquotaISS;

    private $valorServicos;
    private $valorPIS;
    private $valorCOFINS;
    private $valorINSS;
    private $valorIR;
    private $valorCSLL;
    private $valorIss;

    private $outrasRetencoes;
    private $descontoIncondicionado;
    private $descontoCondicionado;

    private $valorDeducoes;
    private $baseCalculo;

    private $issRetido;
    private $valorISSRetido;
    private $valorLiquidoNfse;

    /**
     * @return mixed
     */
    public function getFormato()
    {
        return $this->formato;
    }

    /**
     * @param null $formato
     *
     */
    public function setFormato($formato)
    {
        if(is_null($formato)){
            $this->formato = 'tx2';
        }
        $this->formato = $formato;
    }

    /**
     * @return mixed
     */
    public function getNomeCidade()
    {
        return $this->nomeCidade;
    }

    /**
     * @param mixed $nomeCidade
     */
    public function setNomeCidade($nomeCidade =  null)
    {
        if(is_null($nomeCidade)) {
            throw new \InvalidArgumentException('Informe a Cidade');
        }
        $this->nomeCidade = $nomeCidade;
    }

    /**
     * @return mixed
     */
    public function getPadrao()
    {
        return $this->padrao;
    }

    /**
     * @param mixed $padrao
     */
    public function setPadrao($padrao = null)
    {
        if(is_null($padrao)){
            throw new \InvalidArgumentException('Informe o Padrao');
        }
        $this->padrao = $padrao;
    }



    /**
     * @return mixed
     */
    public function getAliquotaCOFINS()
    {
        return $this->aliquotaCOFINS;
    }

    /**
     * @param mixed $aliquotaCOFINS
     */
    public function setAliquotaCOFINS($aliquotaCOFINS)
    {
        $this->aliquotaCOFINS = $aliquotaCOFINS;
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
    public function getCodigoCidadePrestacao()
    {
        return $this->codigoCidadePrestacao;
    }

    /**
     * @param mixed $codigoCidadePrestacao
     * Código do Município de
     * Prestação.
     */
    public function setCodigoCidadePrestacao($codigoCidadePrestacao)
    {
        if(is_null($codigoCidadePrestacao)) {
            throw new InvalidArgumentException('Informe o CodigoCidadePrestacao');
        }
        $this->codigoCidadePrestacao = $codigoCidadePrestacao;
    }

    /**
     * @return mixed
     */
    public function getCodigoCidadeRemetente()
    {
        return $this->codigoCidadeRemetente;
    }

    /**
     * Código da cidade do
     * emitente, presente na tabela
     * IBGE.
     * @param mixed $codigoCidadeRemetente
     */
    public function setCodigoCidadeRemetente($codigoCidadeRemetente)
    {
        if(!is_string($codigoCidadeRemetente)) {
            throw new InvalidArgumentException('CodigoCidadeRemetende deve ser uma string');
        }
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
//        if (!is_numeric($codigoTributacaoMunicipio)) {
//            throw new \InvalidArgumentException('this value is not a number');
//        }
        $this->codigoTributacaoMunicipio = $codigoTributacaoMunicipio;
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
     * Data de competência da  NFSe.
     * Data no formato brasileiro (“DD/MM/AAAA”) ou no formato usado em arquivos XML
     * (“AAAA-MM-DD”). Ex: “25/12/2011”, “2011-12-25”.
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
     * CPF ou CNPJ do prestador.
     */
    public function setCpfCnpjPrestador($cpfCnpjPrestador)
    {
        if(is_null($cpfCnpjPrestador)) {
            throw new InvalidArgumentException('Informe o campo cpfCnpjPrestador');
        }
        $this->cpfCnpjPrestador = $cpfCnpjPrestador;
    }

    /**
     * @return mixed
     */
    public function getCpfCnpjRemetente()
    {
        return $this->cpfCnpjRemetente;
    }

    /**
     * @param mixed $cpfCnpjRemetente
     */
    public function setCpfCnpjRemetente($cpfCnpjRemetente)
    {
        if(!is_string($cpfCnpjRemetente)) {
            throw new InvalidArgumentException('CpfCnpjRemetende deve ser um string.');
        }

        if(is_null($cpfCnpjRemetente)) {
            throw new InvalidArgumentException('CpfCnpjRemetende nao pode ser nulo.');
        }
        $this->cpfCnpjRemetente = $cpfCnpjRemetente;
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
     * CPF ou CNPJ do Tomador.
     */
    public function setCpfCnpjTomador($cpfCnpjTomador)
    {
        if(is_null($cpfCnpjTomador)) {
            throw new InvalidArgumentException('Informe o CpfCnpjTomador');
        }

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
     * @param mixed
     * Data de emissão do RPS.
     * Data e hora no formato brasileiro (“DD/MM/AAAA HH:MM:SS”) ou no formato usado
     * em arquivos XML (“AAAA-MM-DDTHH:MM:SS”).
     */
    public function setDataEmissao($dataEmissao)
    {
        if(is_null($dataEmissao)) {
            throw new InvalidArgumentException('Informe a dataEmissao');
        }
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
     * @param mixed
     * Data do último lote de RPS
     * presente no lote.
     * Padro de data = YYYY-mm-ddThh:mm:ss
     */
    public function setDataFim($dataFim)
    {
        if(is_null($dataFim)) {
            throw new InvalidArgumentException('Informe a DataFim');
        }
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
     * @param mixed
     * Data do primeiro lote de RPS
     * presente no lote.
     * Padro de data = YYYY-mm-ddThh:mm:ss
     */
    public function setDataInicio($dataInicio)
    {
        if(is_null($dataInicio)) {
            throw new \InvalidArgumentException('Informe a DataInicio');
        }
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
    public function getDescricaoCidadePrestacao()
    {
        return $this->descricaoCidadePrestacao;
    }

    /**
     * @param mixed $descricaoCidadePrestacao
     * Descrição da cidade de Prestação.
     */
    public function setDescricaoCidadePrestador($descricaoCidadePrestacao){

        if(is_null($descricaoCidadePrestacao)) {
            throw new \InvalidArgumentException('Informe a DescricaoCidadePrestacao');
        }

        $this->descricaoCidadePrestacao = $descricaoCidadePrestacao;
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
     * @return mixed
     */
    public function getVersao()
    {
        return $this->versao;
    }

    /**
     *
     * @param null $versao
     * SaoPaulo A versao e diferente.
     */
    public function setVersao($versao)
    {
        if(is_null($versao)) {
            $this->versao = '2.01';
        }
        $this->versao = $versao;
    }


    /**
     * @param int $idLote
     * 1 - é um controle interno da tecnospeed
     */
    public function setIdLote($idLote = 1)
    {
        if ( empty($idLote)) {
            $idLote = 1;
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
     * 1 - controle interno da tecnospeed
     */
    public function setIdRps($idRps = 1)
    {
        if ( empty($idLote)) {
            $this->idRps = 1;
        }
        $this->idRps = (int)$idRps;
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
     * 1 - para sim
     * 2 - para não
     * padrão tecnospeed
     */
    public function setIncentivadorCultural($incentivadorCultural = 2 )
    {
        if ( !is_numeric($incentivadorCultural)) {
            throw new \InvalidArgumentException('IncentivadorCultural deve ser um inteiro.');
        }

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
    public function setIncentivoFiscal($incentivoFiscal = 2)
    {
        if ( !is_numeric($incentivoFiscal)) {
            throw new \InvalidArgumentException('IncentivoFiscal deve ser um inteiro');
        }

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
     * Inscrição Estadual do Tomador
     */
    public function setInscricaoEstadualTomador($inscricaoEstadualTomador)
    {
        if(is_null($inscricaoEstadualTomador)) {
            throw new \InvalidArgumentException('Informe a InscricaoEstadualTomador ');
        }
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
     * Número da inscrição Municipal do prestador.

     */
    public function setInscricaoMunicipalPrestador($inscricaoMunicipalPrestador)
    {
        if(is_null($inscricaoMunicipalPrestador )) {
            throw new \InvalidArgumentException('Informe a IncricaoMunicipalPrestador');
        }
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
        if(is_null($inscricaoMunicipalRemetente)) {
            throw new \InvalidArgumentException('InscricaoMunicipalRemetente nao pode ser nulo');
        }

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
    public function setMetodoEnvio($metodoEnvio = 'WS')
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
    public function setNumeroLote($numeroLote = 1)
    {
        if(!is_numeric($numeroLote)) {
            throw new \InvalidArgumentException('Numero do lote deve ser um inteiro.');
        }
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
     * Numero do RPS.
     */
    public function setNumeroRps($numeroRps)
    {
        if(!is_int($numeroRps)) {
            throw new \InvalidArgumentException('Numero RPS deve ser inteiro.');
        }
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
    public function getOptanteSimplesNacional()
    {
        return $this->optanteSimplesNacional;
    }

    /**
     * @param $optanteSimplesNacional
     * 1 - optante - valor padrão tecnospeed
     * 2 - não optante - valor padrão da tecnospeed
     */
    public function setOptanteSimplesNacional($optanteSimplesNacional = 2)
    {
        if ( !is_numeric($optanteSimplesNacional)) {
            throw new \InvalidArgumentException('OptanteSimplesNacional deve ser um inteiro');
        }

        $this->optanteSimplesNacional = $optanteSimplesNacional;
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
     * 0 - Calculado automaticamente.
     */
    public function setQuantidadeRPS($quantidadeRPS = 0)
    {
        if(!is_numeric($quantidadeRPS)){
            throw new \InvalidArgumentException('QuantidadeRps deve ser um inteiro');
        }
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
     * Razão social do prestador
     */
    public function setRazaoSocialPrestador($razaoSocialPrestador)
    {
        if(is_null($razaoSocialPrestador)) {
            throw new \InvalidArgumentException('Informe a RazaoSocialPrestador');
        }
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
        if(!is_string($razaoSocialRemetente)) {
            throw new \InvalidArgumentException('RazaoSocialRemetente deve ser um String');
        }

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
     * Razão Social do Tomador.
     */
    public function setRazaoSocialTomador($razaoSocialTomador)
    {
        if(is_null($razaoSocialTomador)) {
            throw new \InvalidArgumentException('Informe a RazaoSocialTomador');
        }
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
     * Valor padrao 'U'
     */
    public function setSerieRps($serieRps = 'U')
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
     * 1 - situação normal    - padrão da tecnospeed
     * 2 - situação cancelada - padrão da tecnospeed
     */
    public function setSituacaoNota($situacaoNota = 1)
    {
        if (!is_numeric($situacaoNota)) {
            throw new \InvalidArgumentException('Situacao da nota de ver um inteiro : 1- situacao normal | 2 situacao cancela.');
        }
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
     * Exemplo: Rua, Avenida, etc.
     */
    public function setTipoLogradouroTomador($tipoLogradouroTomador )
    {
        if (is_null($tipoLogradouroTomador)) {
            $tipoLogradouroTomador = '';
        }
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
     * 1 - valor padrão tecnospeed
     */
    public function setTipoRps($tipoRps = 1)
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
    public function setTransacao($transacao = true)
    {
        if(!is_bool($transacao)){
            throw new \InvalidArgumentException('Transacao deve ser um booleano');
        }
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
    public function getValorCOFINS()
    {
        return $this->valorCOFINS;
    }

    /**
     * @param mixed $valorCOFINS
     */
    public function setValorCOFINS($valorCOFINS)
    {
        $this->valorCOFINS = $valorCOFINS;
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
    public function getValorIss()
    {
        return $this->valorIss;
    }

    /**
     * @param mixed $valorIss
     */
    public function setValorIss($valorIss)
    {
        $this->valorIss = $valorIss;
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
    public function getValorLiquidoNfse()
    {
        return $this->valorLiquidoNfse;
    }

    /**
     * @param mixed $valorLiquidoNfse
     */
    public function setValorLiquidoNfse($valorLiquidoNfse)
    {
        $this->valorLiquidoNfse = $valorLiquidoNfse;
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
    public function getValorTotalBaseCalculo()
    {
        return $this->valorTotalBaseCalculo;
    }

    /**
     * @param mixed $valorTotalBasseCalculo
     * Valor total da base de cálculo do lote de RPS
     */
    public function setValorTotalBaseCalculo($valorTotalBaseCalculo = 0)
    {

        $this->valorTotalBaseCalculo =(float)$valorTotalBaseCalculo;
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
     * Valor total das deduções nos RPS
     */
    public function setValorTotalDeducoes($valorTotalDeducoes = 0)
    {
          $this->valorTotalDeducoes = (float) $valorTotalDeducoes;
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
     * Valor total dos serviços
     * prestados nos RPS
     */
    public function setValorTotalServicos($valorTotalServicos)
    {
        $this->valorTotalServicos = (float)$valorTotalServicos ;
    }


    /**
     * Dados do RPS
     */
    private $idIntegracao;

    /**
     * @return mixed
     */
    public function getIdIntegracao()
    {
        return $this->idIntegracao;
    }

    /**
     * @param mixed $idIntegracao
     */
    public function setIdIntegracao($idIntegracao)
    {
        $this->idIntegracao = (int)$idIntegracao;
    }

}