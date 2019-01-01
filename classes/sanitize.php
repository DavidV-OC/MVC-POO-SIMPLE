<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 30/12/2018
 * Time: 22:30
 */

class sanitizeData
{
    private $arrayData = array();

    public function sanitize($values){

        if(!is_array($values)){
           return $this->sanitizer($values);
        }else{
            foreach ($values as $key => $value){
                $this->arrayData[$key] = $this->sanitizer($value);
            }
            return $this->arrayData;
        }
    }

    private function sanitizer($value){

        return trim(htmlspecialchars(strip_tags($value)));
    }
}