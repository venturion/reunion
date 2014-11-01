<?php
define("ENVIRONMENT", "development");

define("ROOT", __DIR__);

/* Load the configuration bootstrap file */
require_once ("config/config.php");

/*Autoload the system classes */
require_once ("reunion/vendor/autoload.php");

$app = new App($config);
$app->run();
?>
