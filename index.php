<?php

//loading classes
include 'classes\router.php';
include "classes\managerGET.php";
include "classes\session.php";

use app as app;

$urlGET = new app\managerGET();
$router = new app\router();
$router->run($urlGET->page());