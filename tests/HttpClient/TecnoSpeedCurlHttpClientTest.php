<?php

require_once __DIR__ . '/AbstractTestHttpClient.php';
use Mockery as m;
use Tecnospeed\HttpClient\TecnospeedCurlHttpClient;

class TecnospeedCurlHttpClientTest extends AbstractTestHttpClient
{
    protected $curlMock;
    protected $curlClient;

    const CURL_VERSION_STABLE = 0x072400;
    const CURL_VERSION_BUGGY = 0x071400;

    public function setUp()
    {
        $this->curlMock = m::mock('Tecnospeed\HttpClient\TecnospeedCurl');
        $this->curlClient = new TecnospeedCurlHttpClient($this->curlMock);
    }
    public function tearDown()
    {
        m::close();
        (new TecnospeedCurlHttpClient()); // Resets the static dependency injection
    }

    public function testCanOpenGetCurlConnection()
    {

    }

}