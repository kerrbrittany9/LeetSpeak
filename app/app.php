<<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/LeetspeakTranslator.php";

    $app = new Silex\Application();

    return $app;

?>
