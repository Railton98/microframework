<?php

require __DIR__.'/vendor/autoload.php';

$app = new RayTecks\App;
$app->setRenderer(new RayTecks\Renderer\PHPRenderer);

$app->get('/hello/{name}', function ($params) {
    return '<p>Meu Nome é: ' . '<strong>' . $params[1] . '</strong></p>';
    // return $params;
});

$app->run();
