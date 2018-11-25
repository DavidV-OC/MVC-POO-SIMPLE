<?php

//loading classes
include 'classes\router.php';

$page = $_GET['page'];

$router = new router();
$router->run($page);