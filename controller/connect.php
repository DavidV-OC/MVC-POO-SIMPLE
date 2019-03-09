<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 30/12/2018
 * Time: 22:05
 */
use app\session;

//session
$session = new session();

$session->setValue("nom", "DAvid");

//db connection


//controle couple login
include 'views\\connect.php';