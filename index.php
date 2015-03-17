<?php

require_once 'autoload.php';

$curl = new \Tecnospeed\HttpClient\TecnospeedCurlHttpClient();

$address = 'https://br.api.pvp.net/api/lol/br/v1.4/summoner/by-name/geandomal?api_key=c62e838d-c868-413c-bdfe-75b712eee3d3';

$result = $curl->send($address,'GET');

print_r($result);