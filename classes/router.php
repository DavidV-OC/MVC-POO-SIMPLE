<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 19/11/2018
 * Time: 20:32
 */
namespace app;

class router
{

    /**
     * @param $controller
     */
    public function run($controller){

        if (!is_null($controller)){
            if(file_exists("controller\\" . $controller . ".php")){
                include("controller\\" . $controller . ".php");
            }else{
                include("controller\\404.php");
            }
        }else{
            include("controller\home.php");
        }


    }



}