<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Tecnospeed\TecnospeedSDKException;

if (!file_exists(__DIR__ . '/TecnospeedTestCredentials.php')) {
  throw new TecnospeedSDKException(
    'You must create a TecnospeedTestCredentials.php file from TecnospeedTestCredentials.php.dist'
  );
}

require_once __DIR__ . '/TecnospeedTestCredentials.php';

