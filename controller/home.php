<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 19/11/2018
 * Time: 21:01
 */

//db
//include '';

//vue
//echo 'page home';
//include 'views\\home.php';

$db = app\mysql::getInstance(
    'mysql:host=localhost;dbname=mvc-poo-simple;charset=utf8',
    'root',
    'root');

$content = $db->query('SELECT * FROM billets');


$loader = new \Twig\Loader\FilesystemLoader('C:\UwAmp\www\MVC-POO-SIMPLE\views');
$twig = new \Twig\Environment($loader, [
    'cache' => 'C:\UwAmp\www\MVC-POO-SIMPLE\views\cache',
    'debug' => true,
]);


$template = $twig->load('home.php');
echo $template->render($content);