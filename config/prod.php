<?php

// configure your app for the production environment

$app['twig.path'] = array(__DIR__.'/../src/View');
$app['twig.options'] = array('cache' => __DIR__.'/../var/cache/twig');
