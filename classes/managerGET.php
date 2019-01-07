<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 30/12/2018
 * Time: 16:30
 */
namespace app;

//TODO: faire un singleton de cette classe

include 'classes\sanitize.php';

class managerGET
{
    private $localGET = array();

    public function __construct(){
        $sanitize = new sanitizeData();
        $this->localGET = $sanitize->sanitize($_GET);
    }
    public function __call($name, $arguments)
    {
        if(!array_key_exists($name, $this->localGET)){
            return null;
        }else{
            return $this->localGET[$name];
        }
    }

}
