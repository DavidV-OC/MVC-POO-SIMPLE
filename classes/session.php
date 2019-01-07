<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 07/01/2019
 * Time: 21:52
 */
//TODO: Faire un singleton de session
namespace app;

class session
{
    public function __construct()
    {
        session_start();
    }

    public function set($key, $value)
    {
        return $_SESSION[$key] = $value;
    }
    public function get($key)
    {
        return $_SESSION[$key];
    }

    public function destroy()
    {
        session_destroy();
    }
}