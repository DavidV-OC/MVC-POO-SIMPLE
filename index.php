<?php

//loading classes
include 'classes\router.php';
include "classes\managerGET.php";

$urlGET= new managerGET();
$router = new router();
$router->run($urlGET->page());