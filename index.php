<?php

//loading classes
include 'classes\router.php';
include "classes\datasGET.php";
include "classes\session.php";
include "classes\mysql.php";
include "classes\\testDB.php";
require_once 'vendor/autoload.php';

use app as app;


$urlGET = new app\datasGET();
$router = new app\router();
$router->run($urlGET->page());
