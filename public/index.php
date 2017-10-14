<?php
// Cambia el directorio actual de PHP a ...
chdir( dirname(__DIR__) );

define("SYS_PATH","lib/");
define("APP_PATH","app/");
define("SRC_PATH","resources/");

require SYS_PATH."init.php";

new App();
