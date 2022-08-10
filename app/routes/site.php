<?php

use app\controllers\Cliente;

$app->post('/cadastrocliente',      Cliente::class . ":insert");
$app->post('/edicaocliente/{id}',   Cliente::class . ":update");
$app->post('/exclusaocliente/{id}', Cliente::class . ":delete");
