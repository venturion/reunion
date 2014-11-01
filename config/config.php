<?php

    require_once("settings.php");
    require_once("database.php");
    require_once("routes.php");

    $config = array_merge($settings, $database, $routes);

?>
