<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 11/02/2019
 * Time: 21:50
 */
namespace app;


class mysql
{
    private static $_instance = null;
    private $db;
    private $query;
    private $result;

    private function __construct($dsn, $login, $pw)
    {
        //$this->connection($dsn, $login, $pw);
        $this->db = new \PDO($dsn, $login, $pw);

    }

    public static function getInstance($dsn, $login, $pw)
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new mysql($dsn, $login, $pw);
        }
        return self::$_instance;
    }

    /**
     * @param $dsn
     * @param $login
     * @param $pw
     */
    private function connection($dsn, $login, $pw)   //PDO('mysql:host=hostname:port;dbname=DB_TEST','username','password')
    {
        $this->db = new \pdo($dsn, $login, $pw);
        return $this->db;
    }

    public function query($sql, $mode = null)
    {
        $this->query = $this->db->prepare($sql);
        $this->query->execute();
        if($mode == 'fetchAll'){
            $this->result = $this->query->fetchAll();
        }else{
            $this->result = $this->query->fetch();
        }
        return $this->result;
    }

}
