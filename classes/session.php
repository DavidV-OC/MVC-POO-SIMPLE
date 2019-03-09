<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 07/01/2019
 * Time: 21:52
 */
namespace app;

class session
{
    private static $_instance;

    public function __construct()
    {
        session_start();
    }

    public static function getInstance()
    {
        if(!self::$_instance){
            self::$_instance = new session();
        }
        return self::$_instance;
    }

    public function setValue($key, $value)
    {
        return $_SESSION[$key] = $value;
    }

    public function getValue($key)
    {
        return $_SESSION[$key];
    }

    public function destroy()
    {
        session_destroy();
    }
}