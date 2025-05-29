<?php
return [
    'id' => 'micro-app',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'micro\controllers',
    'aliases' => [
        '@micro' => dirname(__DIR__),
    ],
];