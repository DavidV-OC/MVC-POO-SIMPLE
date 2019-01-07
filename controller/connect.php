<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 30/12/2018
 * Time: 22:05
 */
use app as app;

//session
$session = new app\session();

$session->set("nom", "DAvid");

//db connection


//controle couple login
include 'views\\connect.php';