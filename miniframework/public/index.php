<?php

use app\Route;

require_once "../vendor/autoload.php";

$route = new \app\Route;

echo 'Isso está funcionando';

print_r($route->getUrl());
?>

