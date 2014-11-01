<?php

    define("ENVIRONMENT", "development");
    
    define("ROOT", __DIR__);

    /* Load the configuration bootstrap file */
    require_once("config/config.php");

    /*Autoload the system classes */
    require_once("../reunion/vendor/autoload.php");

    //$dispatcher = new Dispatcher();
    //$dispatcher->handleEvent();

    $app = new Silex\Application();
        
    // define controllers for a blog
    $blog = $app['controllers_factory'];
    $blog->get('/', function () {
        return 'Blog home page';
    });
    // ...

    // define controllers for a forum
    $forum = $app['controllers_factory'];
    $forum->get('/', function () {
        return 'Forum home page';
    });

    // define "global" controllers
    $app->get('/', function () {
        return 'Main home page';
    });

    $app->mount('/blog', $blog);
    $app->mount('/forum', $forum);
    
    $app->run();

    exit;

    $app = new App();
    $app->run($config);

?>
