<?php
declare(strict_types=1);

//use Ninjify\Nunjuck\Environment;

if (@!include __DIR__ . '/../vendor/autoload.php') {
	echo 'Install Nette Tester using `composer update --dev`';
	exit(1);
}

define('TEST_DIR', __DIR__);
define('TEMP_DIR', TEST_DIR . '/../_temp/');
define('TMP_DIR', TEST_DIR . '/../_temp');

// Configure environment
Tester\Environment::setup();
