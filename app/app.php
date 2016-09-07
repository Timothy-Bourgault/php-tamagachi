<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/tamagotchi.php";

    session_start();

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    // Home Route
    $app->get("/", function() use ($app) {
        $init_food = rand(2, 4);
        $init_attention = rand(2, 5);
        $init_rest = rand(3, 6);



        return $app['twig']->render('tamagotchi_home.html.twig');
    });

    return $app;
?>
