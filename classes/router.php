<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 19/11/2018
 * Time: 20:32
 */

class router
{
    private $page;

    /**
     * @param $controller
     */
    public function run($controller){
        if(file_exists('controller\'' . $controller . '.php')){
            include 'controller\'' . $controller . '.php';
        }else{
            include 'controller\404.php';
        }


    }



}