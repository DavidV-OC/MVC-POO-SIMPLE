<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 30/12/2018
 * Time: 22:05
 */

$db = app\mysql::getInstance(
    'mysql:host=localhost;dbname=mvc-poo-simple;charset=utf8',
    'root',
    'root');

$content = $db->query('SELECT * FROM billets');
//var_dump($content);

//$twig = new twig_Environment($loader, [
//    'cache' => '/path/to/compilation_cache',
//]);

//$loader = new Twig_Loader_Array([
//    'actu' => '{% filter upper %}Hello {{ titre }}! {{ article }} {% endfilter %}',
//]);
//$twig = new Twig_Environment($loader);

$loader = new \Twig\Loader\FilesystemLoader('C:\UwAmp\www\MVC-POO-SIMPLE\views');
$twig = new \Twig\Environment($loader, [
    'cache' => 'C:\UwAmp\www\MVC-POO-SIMPLE\views\cache',
    //'debug' => true,
]);


$template = $twig->load('actu.html');
echo $template->render($content);
