<?php
//DIRETÓRIO BASE DA APLICAÇÃO.
define("ROOT", dirname(__DIR__, 2));
//DIRETÓRIO DAS VIEWS
define("DIR_VIEWS", ROOT . "/app/views/");
//EXTENSSÃO PADRÃO DAS VIEWS
define("EXT_VIEWS", ".html");
//BASE URL 
define('HOME', 'http://localhost');
define("BASE_URL", $app->getBasePath());
