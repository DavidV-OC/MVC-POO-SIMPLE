<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 30/12/2018
 * Time: 16:30
 */

class managerGET
{
    private $localGET = array();

    public function __construct(){
        $this->localGET = $_GET;
    }
    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        if(!array_key_exists($name, $this->localGET)){
            return null;
        }else{
            return $this->localGET[$name];
        }
    }

}
//TODO: rendre localGET sain
//TODO: faire un singleton de cette classe