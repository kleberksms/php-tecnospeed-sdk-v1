<?php

namespace Tecnospeed\Entity;
use Tecnospeed\Assets\Filter\Filter;


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
    private $idIntegracao;

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
    private $responsavelRetencao;



    /**
     * @return mixed
     */
    public function getResponsavelRetencao()
    {
        return $this->responsavelRetencao;
    }

    /**
     * @param mixed $responsavelRetencao
     */
    public function setResponsavelRetencao($responsavelRetencao)
    {
        if(is_null($responsavelRetencao)) {
            $responsavelRetencao = '';
        }
        $this->responsavelRetencao = $responsavelRetencao;
    }

    /**
     * @return mixed
     */
    public function getFormato()
    {
        return $this->formato;
    }

    /**
     * @param null $formato
     * Padrao tx2
     */
    public function setFormato($formato)
    {
        if (empty($formato) || is_null($formato)) {
            $formato = 'tx2';
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
    public function setNomeCidade($nomeCidade)
    {
        if(is_null($nomeCidade)) {
            throw new \InvalidArgumentException('Informe o nome da Cidade Texto');
        }
        $this->nomeCidade = Filter::returnOnlyString( $nomeCidade );
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
     * Padrao TecnoNFSe
     */
    public function setPadrao($padrao)
    {
        if(is_null($padrao) || empty($padrao)) {
            $padrao = 'TecnoNFSe';
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
        if (!is_numeric($aliquotaCOFINS)) {
            throw new \InvalidArgumentException('Informe a AliquotaCOFINS numerico');
        }
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
        if (!is_numeric($aliquotaCSLL)) {
            throw new \InvalidArgumentException('Informe a AliquotaCSLL numerico');
        }
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
        if (!is_numeric($aliquotaINSS)) {
            throw new \InvalidArgumentException('Informe a AliquotaINSS numerico.');
        }
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
        if (!is_numeric($aliquotaIR)) {
            throw new \InvalidArgumentException('Informe a AliquotaIR numerico');
        }
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
        if (!is_numeric($aliquotaISS) ) {
            throw new \InvalidArgumentException('Informe a aliquotaISS numerico');
        }
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
        if (!is_numeric($aliquotaPIS)) {
            throw new \InvalidArgumentException('Informe a AliquotaPis numerico');
        }
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
        if(is_null($bairroTomador)) {
            throw new \InvalidArgumentException('Informe o bairroTomador texto.');
        }
        $this->bairroTomador = Filter::returnOnlyString($bairroTomador);
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
        if (!is_numeric($baseCalculo)) {
            throw new \InvalidArgumentException('Informe a BaseCalculo numerico');
        }
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
        if(is_null($cepTomador) ) {
            throw new \InvalidArgumentException('Informe o  CepTomador texto');
        }
        $this->cepTomador = Filter::returnOnlyNumbers( $cepTomador );
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
     * Código do Município de prestação.
     */
    public function setCodigoCidadePrestacao($codigoCidadePrestacao)
    {
        if(is_null($codigoCidadePrestacao)) {
            throw new \InvalidArgumentException('Informe o  CodigoCidadePrestacao texto');
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
     * Código da cidade do emitente, presente na tabela IBGE.
     * @param mixed $codigoCidadeRemetente
     */
    public function setCodigoCidadeRemetente($codigoCidadeRemetente)
    {
        if(is_null($codigoCidadeRemetente)) {
            throw new \InvalidArgumentException('Informe o CodigoCidadeRemetente numerico');
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
        if(!is_numeric($codigoCidadeTomador)) {
            throw new \InvalidArgumentException('Informe o CodigoCidadeTomador numerico');
        }
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
        if(is_null($codigoCnae))  {
            throw new \InvalidArgumentException('Informe o CodigoCnae numerico');
        }
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
        if(is_null($codigoItemListaServico)) {
            throw new \InvalidArgumentException('Informe o CodigoItemListaServico numerico');
        }
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
        if (is_null($codigoTributacaoMunicipio)) {
            throw new \InvalidArgumentException('Informe o CodigoTributacaoMunicipio.');
        }
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
        if(is_null($competencia)) {
            throw new \InvalidArgumentException('Informe a Competencia (“DD/MM/AAAA”) ');
        }
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
        if(is_null($complementoTomador)) {
            $complementoTomador = '';
        }
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
    public function setCpfCnpjPrestador( $cpfCnpjPrestador )
    {
        if(is_null($cpfCnpjPrestador) ) {
            throw new \InvalidArgumentException('Informe o campo cpfCnpjPrestador');
        }

        $validateCpfCnpj = Filter::validateCpfCnpj( $cpfCnpjPrestador );

        if( !$validateCpfCnpj ) {
            throw new \InvalidArgumentException ('Cpf ou Cnpj do Prestador não é valido');
        }

        $this->cpfCnpjPrestador = $validateCpfCnpj;
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
    public function setCpfCnpjRemetente( $cpfCnpjRemetente )
    {
        if(is_null($cpfCnpjRemetente)) {
            throw new \InvalidArgumentException('Informe o CpfCnpjRemetende texto.');
        }

        $validateCpfCnpj = Filter::validateCpfCnpj( $cpfCnpjRemetente );

        if( !$validateCpfCnpj ) {
            throw new \InvalidArgumentException ('Cpf ou Cnpj do Remetente não é valido');
        }

        $this->cpfCnpjRemetente = $validateCpfCnpj;

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
            throw new \InvalidArgumentException('Informe o CpfCnpjTomador texto');
        }

        $validateCpfCnpj = Filter::validateCpfCnpj( $cpfCnpjTomador );

        if( !$validateCpfCnpj ) {
            throw new \InvalidArgumentException ('Cpf ou Cnpj do Tomador não é valido');
        }

        $this->cpfCnpjTomador = $validateCpfCnpj;

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
        if(is_null($dataEmissao) ) {
            throw new \InvalidArgumentException('Informe a dataEmissao (“DD/MM/AAAA HH:MM:SS”)');
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
     * Padraio de data = YYYY-mm-ddThh:mm:ss
     */
    public function setDataFim($dataFim)
    {
        if(is_null($dataFim)) {
            throw new \InvalidArgumentException('Informe a DataFim YYYY-mm-ddThh:mm:ss');
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
            throw new \InvalidArgumentException('Informe a DataInicio YYYY-mm-ddThh:mm:ss');
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
            throw new \InvalidArgumentException('Ddd deve ter 2 numeros.');
        }
        if(is_null($dddTomador)) {
            $dddTomador = '';
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
        if(is_null($descontoCondicionado) || !is_int($descontoCondicionado)) {
            throw new \InvalidArgumentException("Informe o descontoCondicionado (numerico)");
        }
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
        if(is_null($descontoIncondicionado) || !is_int($descontoIncondicionado)) {
            throw new \InvalidArgumentException("Informe o descontoIncondicionado (numerico)");
        }
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
    public function setDescricaoCidadePrestacao($descricaoCidadePrestacao)
    {

        if(is_null($descricaoCidadePrestacao)) {
            throw new \InvalidArgumentException('Informe a DescricaoCidadePrestacao');
        }

        $this->descricaoCidadePrestacao = Filter::returnOnlyString($descricaoCidadePrestacao);
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
        if(is_null($descricaoCidadeTomador)) {
            throw new \InvalidArgumentException('Informe a descricaoCidadeTomador');
        }
        $this->descricaoCidadeTomador = Filter::returnOnlyString($descricaoCidadeTomador);
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
        if(is_null($discriminacaoServico) ) {
            throw new \InvalidArgumentException('Informe a discriminacaoServico');
        }

        $find = array("\r\n","\r","\t","\v","\n","<br>","<br />","<br/>");
        $discriminacaoServico  = str_replace($find, "|", $discriminacaoServico );

        $this->discriminacaoServico = Filter::returnOnlyString( $discriminacaoServico );
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
        $emailTomador = Filter::validateEmail($emailTomador);


        if(is_null($emailTomador) || !$emailTomador) {
            $emailTomador = '';
        }
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
        if(is_null($enderecoTomador)) {
            throw new \InvalidArgumentException('Informe o EnderecoTomador');
        }
        $this->enderecoTomador = Filter::returnOnlyString( $enderecoTomador );
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
        if (!in_array( $exigibilidadeISS , range( 1 , 7 ) ) || is_null($exigibilidadeISS)) {
            throw new \InvalidArgumentException('Informe a ExigibilidadeIss deve ser entre em 1 e 7');
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
    public function setIdLote($idLote)
    {
        if ( empty($idLote) || is_null($idLote)) {
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
    public function setIdRps($idRps)
    {
        if ( empty($idRps) || is_null($idRps))  {
            $idRps = 1;
        }
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
     * 1 - para sim
     * 2 - para não
     * padrão tecnospeed
     */
    public function setIncentivadorCultural($incentivadorCultural )
    {
        if (!in_array( $incentivadorCultural , range( 1 , 2 ) ) || is_null($incentivadorCultural)) {
            throw new \InvalidArgumentException('Informe a IncentivadorCultural deve ser entre em 1 ou 2');
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
    public function setIncentivoFiscal($incentivoFiscal)
    {
        if ( !is_numeric($incentivoFiscal) ) {
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
        $this->inscricaoMunicipalPrestador = Filter::returnOnlyNumbers($inscricaoMunicipalPrestador);
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
            throw new \InvalidArgumentException('Informe InscricaoMunicipalRemetente.');
        }

        $this->inscricaoMunicipalRemetente = Filter::returnOnlyNumbers($inscricaoMunicipalRemetente);
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
     * Padrao Ws
     */
    public function setMetodoEnvio($metodoEnvio)
    {
        if(is_null($metodoEnvio) || empty($metodoEnvio)) {
            $metodoEnvio = 'WS';
        }
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
     * Usado quando o servico for retido
     */
    public function setMunicipioIncidencia($municipioIncidencia)
    {
        if(is_null($municipioIncidencia)) {
            $municipioIncidencia = '';
        }
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
     * (apenas se  TipoTributacao=4)

     */
    public function setNaturezaTributacao($naturezaTributacao)
    {
        if(is_null($naturezaTributacao)) {
            $naturezaTributacao = '';

        }
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
        if(!is_numeric($numeroLote)) {
            throw new \InvalidArgumentException('Numero do lote deve ser um inteiro.');
        }
        if(is_null($numeroLote)) {
            $numeroLote = 0;
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
        if(is_null($numeroRps)) {
            $numeroRps = 0;
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
        if(is_null($numeroTomador)){
            throw new \InvalidArgumentException('Informe o numeroTomador');
        }
        $this->numeroTomador = Filter::returnOnlyNumbers( $numeroTomador );
    }

    /**
     * @return mixed
     */
    public function getOperacao()
    {
        return $this->operacao;
    }

    /**
     * ‘A’ - Sem Dedução
     * ‘B’ - Com Dedução/Materiais
     * ‘C’ - Imune/Isenta de ISSQN
     * ‘D’ - Devolução/Simples   Remessa
     * ‘J’ – Intermediação
     * @param mixed $operacao
     */
    public function setOperacao($operacao)
    {
        if(is_null($operacao)) {
            $operacao = 'A';
        }
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
    public function setOptanteSimplesNacional($optanteSimplesNacional)
    {
        if ( !is_numeric($optanteSimplesNacional)) {
            throw new \InvalidArgumentException('OptanteSimplesNacional deve ser um inteiro');
        }
        if(is_null($optanteSimplesNacional)) {
            $optanteSimplesNacional = 2;
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
     * Valor das outras retenções.
     */
    public function setOutrasRetencoes($outrasRetencoes)
    {
        if(is_null($outrasRetencoes) || empty($outrasRetencoes)) {
            $outrasRetencoes = '0.00';
        }
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
        if(is_null($paisTomador)) {
            throw new \InvalidArgumentException('Informe o pais do Tomador.');
        }
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
    public function setQuantidadeRPS($quantidadeRPS)
    {
        if(!is_numeric($quantidadeRPS)){
            throw new \InvalidArgumentException('QuantidadeRps deve ser um inteiro');
        }

        if(is_null($quantidadeRPS)) {
            $quantidadeRPS = 0;
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
        $this->razaoSocialPrestador = Filter::returnOnlyString($razaoSocialPrestador);
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
        if(!is_string($razaoSocialRemetente) ) {
            throw new \InvalidArgumentException('RazaoSocialRemetente deve ser um String');
        }

        $this->razaoSocialRemetente =  Filter::returnOnlyString($razaoSocialRemetente);
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
        $this->razaoSocialTomador = Filter::returnOnlyString( $razaoSocialTomador );
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
     * Código de identificação do regime especial de tributação.
     * ‘1’ - Microempresa municipal
     * ‘2’ - Estimativa
     * ‘3’ - Sociedade de profissionais
     * ‘4’ - Cooperativa
     * ‘5’ - Microempresário Individual (MEI)
     * ‘6’ - Microempresário e Empresa de Pequeno Porte, (ME EPP)
     */
    public function setRegimeEspecialTributacao($regimeEspecialTributacao){

        if(is_null($regimeEspecialTributacao)) {
            throw new \InvalidArgumentException('Informe o RegimeEspecialTributacao entre 1 e 6');
        }
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
    public function setSerieRps($serieRps)
    {
        if(is_null($serieRps) || empty($serieRps)) {
            $serieRps = 'U';
        }
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
    public function setSituacaoNota($situacaoNota)
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
        if(is_null($telefoneTomador)) {
            throw new \InvalidArgumentException('Informe telefoneTomador');
        }

        $this->telefoneTomador = substr(Filter::returnOnlyNumbers($telefoneTomador),-9);
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
        if(is_null($tipoBairroTomador)) {
            $tipoBairroTomador = '';
        }
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
            $tipoLogradouroTomador = 'Rua';
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
    public function setTipoRps($tipoRps)
    {
        if(is_null($tipoRps) || empty($tipoRps)) {
            $tipoRps = 1;
        }
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
        if(is_null($tipoTributacao)) {
            throw new \InvalidArgumentException('Informe o TipoTributacao');
        }
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
        if(is_null($ufTomador)){
            throw new \InvalidArgumentException('Informe a Uftomador');
        }
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
    public function setValorCOFINS($valorCOFINS){

        if(!is_numeric($valorCOFINS)) {
            throw new \InvalidArgumentException('valorCOFINS deve ser numerico');
        }
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
        if(!is_numeric($valorCSLL)) {
            throw new \InvalidArgumentException('valorCSLL deve ser numerico');
        }
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
        if(!is_numeric($valorDeducoes)) {
            throw new \InvalidArgumentException('Informe a ValorDeducoes numerico');
        }
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
        if(!is_numeric($valorINSS)) {
            throw new \InvalidArgumentException('Informe o valorINSS numerico');
        }
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
        if(!is_numeric($valorIR)) {
            throw new \InvalidArgumentException('Informe o valorIR numerico');
        }
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
        if((!isset($valorIss)) || (empty($valorIss)) || (0 == (int)$valorIss)) {

            if(!isset($this->valorServicos) && !isset($this->aliquotaISS)) {
                throw new \InvalidArgumentException('ValorIss não informado');
            }
            $valorIss = (($this->valorServicos * $this->aliquotaISS) / 100);
        }

        $valorIss = round($valorIss, 2, PHP_ROUND_HALF_DOWN);

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

        if(!is_numeric($valorISSRetido)) {
            throw new \InvalidArgumentException('valorISSRetido deve ser informado(numerico)');
        }
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
        if(!is_numeric($valorLiquidoNfse)) {
            throw new \InvalidArgumentException('valorLiquidoNfse deve ser numerico');
        }
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

        if(!is_numeric($valorPIS)) {
            throw new \InvalidArgumentException('Informe o valorPIS (numerico)');
        }
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
        if(!is_numeric($valorServicos)) {
            throw new \InvalidArgumentException('Informar o valorServicos numerico');
        }
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
     * @param $valorTotalBaseCalculo
     * Valor total da base de cálculo do lote de RPS
     */
    public function setValorTotalBaseCalculo($valorTotalBaseCalculo)
    {
        if(!is_numeric($valorTotalBaseCalculo)) {
            throw new \InvalidArgumentException('Informe o valorTotalBaseCalculo deve ser numerico');
        }

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
     * Valor total dos serviços prestados nos RPS
     */
    public function setValorTotalServicos($valorTotalServicos)
    {
        if(!is_numeric($valorTotalServicos)) {
            throw new \InvalidArgumentException('valorTotalServicos deve ser numerico');
        }
        $this->valorTotalServicos = (float)$valorTotalServicos ;
    }

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
        if(!is_numeric($idIntegracao)) {
            throw new \InvalidArgumentException('Informe o idIntegracao');
        }
        $this->idIntegracao = $idIntegracao;
    }

    /**
     * Seta aliquotas com 0.00
     * para cidades parametrizadas no arquivo Cities.php
     * se o tomador for pessoa juridica;
     */


    /**
     * Seta aliquotas com 0.00
     * para cidades parametrizadas no arquivo Cities.php
     * se o tomador for pessoa juridica;
     *
     * @param $cpf
     * @return $this
     */
    public function setAliquotasCpf( $cpf )
    {
        if(11 == strlen( $cpf )) {
            $this->setValorCOFINS('0.00');
            $this->setValorCSLL('0.00');
            $this->setValorPIS('0.00');
            $this->setAliquotaCOFINS('0');
            $this->setAliquotaCSLL('0');
            $this->setAliquotaPIS('0');
            $this->setValorIR('0.00');
            $this->setAliquotaIR('0');
        }
        return $this;
    }

}