<?php

use Slim\Factory\AppFactory;

require "../vendor/autoload.php";
$app = AppFactory::create();
//INCLUIMOS AS CONFIGURAÇÕES
require "../app/helpers/config.php";
//INCLUIMOS TODAS AS ROTAS.
require "../app/routes/site.php";
//RUM APP//
$app->run();
