<?php
define('BASE_PATH', dirname(dirname(__DIR__)));
define('SRC_PATH', BASE_PATH . '/src');
define('PUBLIC_PATH', BASE_PATH . '/public');
define('DATABASE_PATH', BASE_PATH . '/database');
define('ASSETS_PATH', PUBLIC_PATH . '/assets');

define('DB_PATH', DATABASE_PATH . '/costa_information.db');

ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);
?>