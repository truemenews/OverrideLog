<?php require __DIR__.'/../Support/helpers.php';

$app['config'] = [
    'log' => require __DIR__.'/../config/log.php',
];

return $app;
