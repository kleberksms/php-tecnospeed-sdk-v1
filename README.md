Tecnospeed SDK for PHP
====================

This repository contains the open source PHP SDK that allows you to access Facebook
Platform from your PHP app.


Usage
-----

This version of the Facebook SDK for PHP requires PHP 5.4 or greater.

Minimal example:

```php
<?php

// Skip these two lines if you're using Composer
define('TECNOSPEED_SDK_V1_SRC_DIR', '/path/to/tecnospeed-php-sdk-v1/src/Tecnospeed/');
require __DIR__ . '/path/to/facebook-php-sdk-v4/autoload.php';

use Tecnospeed\ManagerNf;
use Tecnospeed\Nf;



Tests
-----

1) [Composer](https://getcomposer.org/) is a prerequisite for running the tests.

Install composer globally, then run `composer install` to install required files.


2) The tests can be executed by running this command from the root directory:

```bash
./vendor/bin/phpunit
```
