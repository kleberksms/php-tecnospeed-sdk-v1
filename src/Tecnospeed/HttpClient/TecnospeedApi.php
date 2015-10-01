<?php


namespace Tecnospeed\HttpClient;

use Tecnospeed\Assets\Filter\Filter;


class TecnospeedApi {

    private $method;
    private $url;
    private $curl;
    private $cities;
    private $cnpjFilial;

    public function __construct()
    {
        $this->api           = include __DIR__.'/../Config/Api.php';
        $this->cities        = include __DIR__.'/../Config/Cities.php';
        return $this;
    }

    /**
     * Gera a Url.
     * @param $parameters
     * @return $this
     */
    private function generateUrl($parameters)
    {
        $this->url  = $this->api[$this->method]['url'];
        $this->url .= http_build_query($parameters);
        return $this;
    }

    /**
     * Consulta as notas conforme os parametros.
     * @param $cnpj
     * @param array $parameters
     * @param bool $normalizeArray
     * @return array|mixed
     * @link https://ciranda.me/tsdn/base-de-conhecimento/post/manual-manager-edoc-nfse-consulta
     */
    public function find($cnpj, $parameters = array(), $normalizeArray = false)
    {
        if(is_null($cnpj)) {
            throw new \InvalidArgumentException('Informe o cnpj da filial.');
        }
        if(empty($parameters)) {
            throw new \InvalidArgumentException('Informe os parametros para a pesquisa');
        }

        $this->cnpjFilial = $cnpj;
        $this->setMethod('consulta');

        $param = array(
            'CNPJ'       => $this->cnpjFilial,
            'grupo'      => $this->cities[$this->cnpjFilial]['grupo'],
            'NomeCidade' => $this->cities[$this->cnpjFilial]['nomeCidade'],
            'filtro'     => $parameters['filtro'],
            'campos'     => isset($parameters['campos']) ? $parameters['campos']: $this->api['consulta']['campos'],
            'Ordem'      => isset($parameters['ordem'])  ? $parameters['ordem'] : $this->api['consulta']['ordem'],
            'Limite'     => isset($parameters['limite']) ? $parameters['limite']: $this->api['consulta']['limite'],
        );

        $result = $this->generateUrl($param)
                       ->curlConfig()
                       ->getData();

        if( $normalizeArray ) {
            $separate  = Filter::separeDataResult($result);
            $nomalized = Filter::normalizeResultApi($separate);
            return $nomalized;
        }

        return ($result);

    }

    /**
     * Descarta as notas Rejeitas do Cnpj informado.
     * @param $cnpj
     * @return array
     * @link https://ciranda.me/tsdn/base-de-conhecimento/post/manual-manager-edoc-nfse-http-descarta
     */
    public function descartaNf($cnpj)
    {
        if(is_null($cnpj)) {
            throw new \InvalidArgumentException ('Informe o Cnpj da Filial das notas a serem canceladas!');
        }

        $result = array();

        $this->cnpjFilial   = $cnpj;

        $nfRejected         = Filter::separeDataResult($this->getReject($cnpj));

        $this->method       = 'descarta';

        foreach($nfRejected as $handle) {

            $postFields = array(
                'CNPJ'       => $this->cnpjFilial,
                'grupo'      => $this->cities[$this->cnpjFilial]['grupo'],
                'NomeCidade' => $this->cities[$this->cnpjFilial]['nomeCidade'],
                'handle'     => $handle,
                'situacao'   =>  'REJEITADA',
                'SerieRPS'   =>  'U',
                'tiporps'    =>  '1',
            );

            $result[] = $this->getWithSocket($postFields);
        }

        return $result;

    }

    /**
     * Consulta o ultimo Rps Autorizado
     * @param $cnpj
     * @return mixed
     */
    public function getLastRps($cnpj)
    {
        $cnpj = Filter::returnOnlyNumbers($cnpj);

        /**
         * So retorna o ultimo rps para cidades
         * parametrizadas no arquivo Cities no atributo getLastRps.
         */
        if ( !$this->cities[$cnpj]['getLastRps'] ) {
            return 1;
        }

        if(is_null($cnpj)) {
            throw new \InvalidArgumentException ('Informe o cnpj da filial.');
        }

        $parameters = array(
                'filtro' => 'situacao=AUTORIZADA',
                'campos' => 'nrps',
                'ordem'  => 'Handle desc',
                'limite' =>  '1',
        );

        $result = $this->find($cnpj,$parameters, false);
        return $result;
    }

    /**
     * Retorna o Handle da nota conforme parametros.
     *  <p> Handle - Numero da sequencia dentro do manager </p>
     * @param $cnpj
     * @param $idIntegracao
     * @return array|mixed
     */
    private function getHandle($cnpj, $idIntegracao)
    {
        if(is_null($idIntegracao)) {
            throw new \InvalidArgumentException ('Informe o idIntegracao');
        }

        $this->cnpjFilial = $cnpj;

        $parametersFind = array(
            'CNPJ'       => $this->cnpjFilial,
            'grupo'      => $this->cities[$this->cnpjFilial]['grupo'],
            'campos'     => 'Handle',
            'filtro'     => 'idIntegracao = '.$idIntegracao,
        );

        return $this->find($cnpj, $parametersFind);
    }


    /**
     * Retorna o Numero da NFse, (nnfse), da nota conforme parametros.
     * @param $cnpj
     * @param $idIntegracao
     * @return array|mixed
     */
    private function getNumNFse($cnpj, $idIntegracao)
    {
        if(is_null($idIntegracao)) {
            throw new \InvalidArgumentException ('Informe o idIntegracao');
        }

        $this->cnpjFilial = $cnpj;

        $parametersFind = array(
            'CNPJ'       => $this->cnpjFilial,
            'grupo'      => $this->cities[$this->cnpjFilial]['grupo'],
            'campos'     => 'nnfse',
            'filtro'     => "idIntegracao={$idIntegracao} AND situacao=AUTORIZADA"
        );

        return $this->find($cnpj, $parametersFind);
    }
    /**
     * Metodo para consulta dos Pdf's.
     * @param $cnpj
     * @param $idIntegracao
     * @param $nnfse
     * @return mixed
     * @link http://ciranda.me/tsdn/base-de-conhecimento/post/manual-manager-edoc-nfse-http-imprime-pdf
     */
    public function pdf($cnpj, $idIntegracao)
    {
        if(is_null($idIntegracao)) {
            throw new \InvalidArgumentException('Informe o codigo de integracao para a pesquisa');
        }

       $this->cnpjFilial = $cnpj;
       $nnfse   = $this->getNumNFse($cnpj, $idIntegracao);

        $parameters = array(
            'CNPJ'       => $this->cnpjFilial,
            'grupo'      => $this->cities[$this->cnpjFilial]['grupo'],
            'NomeCidade' => $this->cities[$this->cnpjFilial]['nomeCidade'],
            'NumNFSe'    => $nnfse,
            'URL'        => '1',
        );

        $this->method    = 'imprime';

        $result = $this->generateUrl($parameters)
                       ->curlConfig()
                       ->getData();
        return $result;

    }

    /**
     * Metodo para exportação de arquivos em xml
     * @param $data array
     * @return mixed
     * @throws \Exception
     * @link https://ciranda.me/tsdn/base-de-conhecimento/post/manual-manager-edoc-nfse-http-exporta
     */
    public function exportaXML($data)
    {
        if(!is_array($data)) {
            throw new \InvalidArgumentException ('Dados não informados!');
        }

        if(!isset($data['cnpj'])) {
            throw new \InvalidArgumentException ('Informe o Cnpj da Filial!');
        }

        if(is_null($data['codIntegracao'])) {
            throw new \InvalidArgumentException('Informe o codigo de integração');
        }

        $idIntegracao       = $data['codIntegracao'];
        $dtinicial          = (isset($data['Dtinicial']))   ? $data['Dtinicial']    : '01/01/2015';
        $dtfinal            = (isset($data['Dtfinal']))     ? $data['Dtfinal']      : '01/01/2099';
        $this->cnpjFilial   = $data['cnpj'];

        $parameters = array(
            'campos'    => 'nnfse',
            'filtro'    => "idIntegracao={$idIntegracao} AND situacao=AUTORIZADA",
            'ordem'     => 'dtautorizacao desc',
            'limite'    => 1
        );

        $nnfse = $this->find( $this->cnpjFilial, $parameters, false);

        $this->method= 'exportaxml';

        $postFields = array(
            'CNPJ'          => $this->cnpjFilial,
            'grupo'         => $this->cities[$this->cnpjFilial]['grupo'],
            'NomeCidade'    => $this->cities[$this->cnpjFilial]['nomeCidade'],
            'Tipo'          => 'AUTORIZACAO',
            'Dtinicial'     => $dtinicial,
            'Dtfinal'       => $dtfinal,
            'Ninicial'      => $nnfse,
            'Nfinal'        => $nnfse,
            'URL'           => 1
        );

        $result = $this->getWithSocket($postFields);

        return $result;
    }

    /**
     * Metodo para exportação de arquivos em xml por periodo
     * @param $data array
     * @return mixed
     * @throws \Exception
     * @link https://ciranda.me/tsdn/base-de-conhecimento/post/manual-manager-edoc-nfse-http-exporta
     * $data = array(
        'cnpj'              => '03404018000147',
        'Dtinicial'         => '01/04/2015',
        'Dtfinal'           => '05/05/2015'
        );
     */
    public function exportaXML_byDate($data)
    {
        if(!is_array($data)) {
            throw new \InvalidArgumentException ('Dados não informados!');
        }

        if(!isset($data['cnpj'])) {
            throw new \InvalidArgumentException ('Informe o Cnpj da Filial!');
        }

        $dtinicial          = $data['Dtinicial'];
        $dtfinal            = $data['Dtfinal'];
        $this->cnpjFilial   = Filter::returnOnlyNumbers($data['cnpj']);

        $this->method= 'exportaxml';

        $postFields = array(
            'CNPJ'          => $this->cnpjFilial,
            'grupo'         => $this->cities[$this->cnpjFilial]['grupo'],
            'NomeCidade'    => $this->cities[$this->cnpjFilial]['nomeCidade'],
            'Tipo'          => 'AUTORIZACAO',
            'Dtinicial'     => $dtinicial,
            'Dtfinal'       => $dtfinal,
            'URL'           => 1
        );

        $result = $this->getWithSocket($postFields);

        return $result;
    }

    /**
     * Metodo para resolver as notas em estado Pendente no Manager E-doc
     * @param $data array
     * @return mixed
     * @throws \Exception
     * @link http://ciranda.me/tsdn/base-de-conhecimento/post/manual-manager-edoc-nfse-http-resolve
     * $data = array(
    'cnpj'      => '03404018004568',
    'idManager' => '1017935',
    );
     */
    public function resolve($data)
    {
        if(!is_array($data)) {
            throw new \InvalidArgumentException ('Dados não informados!');
        }

        if(!isset($data['cnpj'])) {
            throw new \InvalidArgumentException ('Informe o Cnpj da Filial!');
        }

        $this->cnpjFilial   = Filter::returnOnlyNumbers($data['cnpj']);

        $this->method       = 'resolve';

        $postFields = array(
            'CNPJ'          => $this->cnpjFilial,
            'grupo'         => $this->cities[$this->cnpjFilial]['grupo'],
            'NomeCidade'    => $this->cities[$this->cnpjFilial]['nomeCidade'],
            'Handle'        => $data['idManager'],
        );

        $result = $this->getWithSocket($postFields);

        return $result;
    }


    /**
     * Metodo para Cancelar notas em estado AUTORIZADA no Manager E-doc
     * @param $data array
     * @return mixed
     * @throws \Exception
     * @link http://ciranda.me/tsdn/base-de-conhecimento/post/manual-manager-edoc-nfse-http-cancela
     * $data = array(
            'cnpj'      => '03404018002867',
            'idManager' => '72236',
            'nrps'      => '3451',
        );
     * @exemple 1 $result = $api->cancela($data));
     * @exemple 2 $result = $api->cancela(array('cnpj'=> '03404018002867','idManager'=>72236,'nrps'=>3451));
     */
    public function cancela($data)
    {
        if(!is_array($data)) {
            throw new \InvalidArgumentException ('Dados não informados!');
        }

        if(!isset($data['cnpj'])) {
            throw new \InvalidArgumentException ('Informe o Cnpj da Filial!');
        }

        $this->cnpjFilial   = Filter::returnOnlyNumbers($data['cnpj']);

        $this->method       = 'cancela';

        $postFields = array(
            'CNPJ'          => $this->cnpjFilial,
            'grupo'         => $this->cities[$this->cnpjFilial]['grupo'],
            'NomeCidade'    => $this->cities[$this->cnpjFilial]['nomeCidade'],
            'Handle'        => $data['idManager'],
            'nrps'          => $data['nrps'],
        );

        $result = $this->getWithSocket($postFields);

        return $result;
    }

    /**
     * Retorna os dados do Curl.
     * @return mixed
     */
    private function getData()
    {
        return curl_exec($this->curl);
    }

    /**
     * Retorna as notas rejeitadas.
     * @param $cnpj
     * @return mixed
     */
    public function getReject($cnpj)
    {
        $parameter = array(
            'filtro' => 'situacao=REJEITADA',
            'campos' => 'handle',
        );
        return $this->find($cnpj, $parameter, false);
    }


    /**
     * @todo Separar a configuracao do curl em outra classe.
     */
    private function curlConfig()
    {
        $user     = $this->api[$this->method]['user'];
        $password = $this->api[$this->method]['password'];

        $this->curl = curl_init();
        curl_setopt($this->curl, CURLOPT_URL, $this->url);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->curl, CURLOPT_USERPWD, $user.':'.$password);
        return $this;
    }

    /**
     * * @param array $postFilds
     * @return $this
     */
    private function curlConfigPost($postFilds = array())
    {
        $user        = $this->api[$this->method]['user'];
        $password    = $this->api[$this->method]['password'];
        $credentials = "$user".':'."$password";

        $headers = array(
            "Content-type: text/xml;charset=\"utf-8\"",
            "Content-length: ".@strlen($postFilds),
            "Authorization: Basic " . base64_encode($credentials)
        );

        $this->curl = curl_init();
        curl_setopt($this->curl, CURLOPT_URL, $this->url);
        curl_setopt($this->curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($this->curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->curl, CURLOPT_HEADER, 0);
        curl_setopt($this->curl, CURLINFO_HEADER_OUT, false);
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $postFilds);

        return $this;
    }

    private function getWithSocket($post_data)
    {
        $user        	= $this->api[$this->method]['user'];
        $password    	= $this->api[$this->method]['password'];
        $credentials 	= "$user".':'."$password";

        $host 			= '192.168.200.199';
        $port 			= '8081';

        $data = http_build_query($post_data);

        $auth = base64_encode($credentials);

        $socket = fsockopen($host, $port, $errno, $errstr, 15);

        if (!$socket) {
            throw new \Exception('Erro ao conectar no manager.<br>');
        }

        $http  = "POST /ManagerAPIWeb/nfse/".$this->method ." HTTP/1.1\r\n";
        $http .= "Authorization: Basic " . $auth . "\r\n";
        $http .= "Host: " . $host . ":".$port."\r\n";
        $http .= "User-Agent: " . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
        $http .= "Content-Type: application/x-www-form-urlencoded\r\n";
        $http .= "Content-length: " . strlen($data) . "\r\n";
        $http .= "Connection: close\r\n\r\n";
        $http .= $data . "\r\n\r\n";

        fwrite($socket, $http);

        $result = "";

        //Lê todas as linhas do retorno
        while (!feof($socket)) {
            $result .= fgets($socket, 4096);
        }
        fclose($socket);

        //Separa header do conteudo
        list($header, $body) = preg_split("/\R\R/", $result, 2);

        return $body;

    }

    private function getHeaders()
    {
        return curl_getinfo($this->curl);
    }


    private function closeCurl()
    {
        curl_close($this->curl);
    }


    public function setMethod($method)
    {
        if(!is_string($method)) {
            throw new \InvalidArgumentException('O metodo informado deve ser um string');
        }
        $this->method = strtolower($method);
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }


}