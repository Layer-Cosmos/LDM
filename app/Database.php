<?php

/**
 * Created by PhpStorm.
 * User: Layer
 * Date: 04/11/2016
 * Time: 18:35
 */

//use \PDO;

//namespace App;

class Database
{
    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    public function __construct($db_name, $db_user = 'root', $db_pass = '', $db_host = '127.0.0.1')
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }

    public function getPDO()
    {
        if ($this->pdo === null){
            $pdo = new PDO("mysql:dbname=ldm;host;localhost", 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }

    public function query($sql, $class_name = null)
    {
        $req = $this->getPDO()->query($sql);

        if($class_name === null){
            $req->setFetchMode(PDO::FETCH_OBJ);
        }

        $datas = $req->fetch();

        return $datas;
    }
}