<?php

require_once(__DIR__ . '/../vendor/autoload.php');

$config = require(__DIR__ . '/../config/config.php');
$front = new \Melanie\Conference\Core\FrontController($config);
$front->process();
