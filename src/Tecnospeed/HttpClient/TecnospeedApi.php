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
        $this->api           = include __DIR__.'..\..\Config\API.php';
        $this->cities        = include __DIR__.'..\..\Config\Cities.php';
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
     * @return mixed
     */
    public function find($cnpj, $parameters = array())
    {
        if(is_null($cnpj)) {
            throw new \InvalidArgumentException('Informe o cnpj da filial.');
        }
        if(empty($parameters)) {
            throw new \InvalidArgumentException('Informe os parametros para a pesquisa');
        }

        $this->cnpjFilial = $cnpj;
        $this->setMethod('consulta');

        $paran = array(
            'CNPJ'       => $this->cnpjFilial,
            'grupo'      => $this->cities[$this->cnpjFilial]['grupo'],
            'NomeCidade' => $this->cities[$this->cnpjFilial]['grupo'],
            'filtro'     => $parameters['filtro'],
            'campos'     => isset($parameters['campos']) ? $parameters['campos']: $this->api['consulta']['campos'],
            'Ordem'      => isset($parameters['ordem'])  ? $parameters['ordem'] : $this->api['consulta']['ordem'],
            'Limite'     => isset($parameters['limite']) ? $parameters['limite']: $this->api['consulta']['limite'],
        );
        //die(var_dump($paran));

        $result = $this->generateUrl($paran)
                       ->curlConfig()
                       ->getData();
        return Filter::normalizeResultApi( $result );
    }

    /**
     * Descarta as notas Rejeitas do Cnpj informado.
     * @param $cnpj
     * @return array
     */
    public function descartaNf($cnpj)
    {
        if(is_null($cnpj)) {
            throw new \InvalidArgumentException ('Informe o Cnpj da Filial das notas a serem canceladas!');
        }

        $result = array();
        $this->method     = 'descarta';
        $this->cnpjFilial = $cnpj;

        $nfRejected = Filter::separeDataResult ( $this->getReject($cnpj) );

        foreach($nfRejected as $numRPS) {

            $postFields = array(
                'CNPJ'       => $this->cnpjFilial,
                'grupo'      => $this->cities[$this->cnpjFilial]['grupo'],
                'NomeCidade' => $this->cities[$this->cnpjFilial]['grupo'],
                'NumRPS'     => $numRPS,
                'SerieRPS'   =>  'U',
                'tiporps'    =>  '1',
            );

            $this->generateUrl($postFields);
            $result[] = $this->curlConfigPost($postFields)->getData();

        }

        $this->closeCurl();
        return $result;

    }

    /**
     * Consulta o ultimo Rps Autorizado
     * @param $cnpj
     * @return mixed
     */
    public function getLastRps($cnpj)
    {
        if(is_null($cnpj)) {
            throw new \InvalidArgumentException ('Informe o cnpj da filial.');
        }

        $parameters = array(
                'filtro' => 'situacao=AUTORIZADA',
                'campos' => 'nrps',
                'ordem'  => 'Handle desc',
                'limite' =>  '1',
        );

        $result = $this->find($cnpj,$parameters);
        return $result;

    }

    /**
     * Metodo para consulta dos Pdf's.
     * @param $cnpj
     * @param $nnfse
     * @return mixed
     */
    public function pdf($cnpj,$nnfse)
    {
        if(is_null($nnfse)) {
            throw new \InvalidArgumentException('Informe o Nº da nota para a pesquisa');
        }

        $this->method    = 'imprime';
        $this->cnpjFilial = $cnpj;

        $paran = array(
            'CNPJ'       => $this->cnpjFilial,
            'grupo'      => $this->cities[$this->cnpjFilial]['grupo'],
            'NomeCidade' => $this->cities[$this->cnpjFilial]['grupo'],
            'Handle'     => '869',
            'URL'        => '1'
        );

        $result = $this->generateUrl($paran)
                       ->curlConfig()
                       ->getData();
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
            'campos' => 'nrps',
        );
        return $this->find($cnpj,$parameter);
    }


    /**
     * @todo Separar a configuracao do curl em outra classe.
     */
    private function curlConfig()
    {
        $user     = $this->api[$this->method]['user'];
        $password = $this->api[$this->method]['passoword'];

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
        $password    = $this->api[$this->method]['passoword'];
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
        curl_setopt($this->curl, CURLOPT_HEADER, 1);
        curl_setopt($this->curl, CURLINFO_HEADER_OUT, true);
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $postFilds);

        return $this;
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