<?php


namespace Tecnospeed\HttpClient;


class TecnospeedApi {

    private $method;
    private $url;


    private $curl;
    private $config;
    private $cities;
    private $cnpjFilial;


    public function __construct()
    {
        $this->api           = include __DIR__.'..\..\Config\API.php';
        $this->cities        = include __DIR__.'..\..\Config\Cities.php';
        return $this;
    }

    /**
     * Create Url
     * @param $parameters
     * @return $this
     */
    private function generateUrl($parameters)
    {
        $this->url  = $this->api[$this->method]['url'];
        $this->url .= http_build_query($parameters);
        return $this;
    }

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
            'campos'     => isset($parameters['campos']) ? $parameters['campos']: $this->api[$this->method]['campos'],
            'ordem'      => $this->api[$this->method]['ordem'],
        );

        $result = $this->generateUrl($paran)
                       ->curlConfig()
                       ->getData();
        return $result;
    }

    public function descartaNf($cnpj)
    {
        if(is_null($cnpj)) {
            throw new \InvalidArgumentException ('Informe o Cnpj da Filial das notas a serem canceladas!');
        }
        $this->method     = 'descarta';
        $this->cnpjFilial = $cnpj;

//        return $this->getReject($cnpj);
//
//        foreach($this->getReject($this->cnpjFilial) as $nfeRejected) {
//            $nfToRejecte['nrps'] = $nfeRejected;
//        }

        $parameters = array(
            'CNPJ'       => $this->cnpjFilial,
            'grupo'      => $this->cities[$this->cnpjFilial]['grupo'],
            'NomeCidade' => $this->cities[$this->cnpjFilial]['grupo'],
        );

        $this->generateUrl($parameters);

        $postFields = array(
            'NumRPS'     =>  '160',
            'SerieRPS'   =>  'U',
            'tiporps'    =>  '1',
        );

        $result = $this->curlConfigPost($postFields)->getData();
        $this->closeCurl();
        return $result;

    }

    /**
     * @todo implementar a funcionalidade
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

    private function getData()
    {
        return curl_exec($this->curl);
    }



    private function explodeArray($array = array())
    {

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
     * @todo Fazer funcionar
     * @param array $postFilds
     * @return $this
     */
    private function curlConfigPost($postFilds = array())
    {
        $user     = $this->api[$this->method]['user'];
        $password = $this->api[$this->method]['passoword'];

        $this->curl = curl_init();
        curl_setopt($this->curl, CURLOPT_URL, $this->url);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $postFilds);
        curl_setopt($this->curl, CURLOPT_USERPWD, $user.':'.$password);
        return $this;

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