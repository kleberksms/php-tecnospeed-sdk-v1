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

        $this->generateUrl($paran);
        $this->curlConfig();
        $result = $this->getData();
        $this->closeCurl();
        return $result;
    }

    /**
     * @todo implementar a funcionalidade
     */
    public function pdf($nnfse)
    {
        if(is_null($nnfse)) {
            throw new \InvalidArgumentException('Informe o Nº da nota para a pesquisa');
        }

        $this->method = 'imprime';
    }

    private function getData()
    {
        return curl_exec($this->curl);
    }

    public function descartaNf($cnpj,$handle)
    {
        if(is_null($handle)) {
            throw new \InvalidArgumentException ('Informe o Handle da nota a ser cancelada!');
        }

        if(is_null($cnpj)) {
            throw new \InvalidArgumentException ('Informe o Cnpj da Filia da nota a ser cancelada!');
        }
        $this->method = 'descarta';
        $this->cnpjFilial = $cnpj;

        $parameters = array(
            'NomeCidade' => $this->cities[$this->cnpjFilial]['grupo'],
            'Handle' => $handle,
        );

        $this->generateUrl($parameters);
        $result = $this->getData();
        $this->closeCurl();
        return $result;




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