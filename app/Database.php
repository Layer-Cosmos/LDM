<?php

/**
 * Created by PhpStorm.
 * User: Layer
 * Date: 04/11/2016
 * Time: 18:35
 */

namespace App;

use \PDO;

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
            $datas = $req->fetchAll(PDO::FETCH_OBJ);
        }else{
            $datas = $req->fetchAll(PDO::FETCH_CLASS, $class_name);
        }

        return $datas;
    }

    public function prepare($sql, $attributes, $class_name = null, $one = false){
//        var_dump($sql);
//        var_dump($attributes);
        $req = $this->getPDO()->prepare($sql);
        $res = $req->execute($attributes);
        if(strpos($sql, 'INSERT') === 0 || strpos($sql, 'UPDATE') === 0){
            return $res;
        }

        if($class_name === null){
            $req->setFetchMode(PDO::FETCH_OBJ);
        } else{
            $req->setFetchMode(PDO::FETCH_CLASS);
        }
        if($one){
            $datas = $req->fetch();
        } else{
            $datas = $req->fetchAll();
        }
        return $datas;
    }

    public function addFile($file, $sql, $attributes, $class_name = null, $one = false){
        $size = $file['tmp_name'];
        $taille = getimagesize($size);
        var_dump($taille);
        $widht = 300;
        $reducPourcent = (($widht * 100) / $taille[0]);
        $nouvelleHauteur = (($taille[1] * $reducPourcent) / 100);
        echo 'Pourcentage : '. $reducPourcent;
        var_dump($nouvelleHauteur);
        $imageChoisie = imagecreatefromjpeg($file['tmp_name']);
        $nouvelleImage = imagecreatetruecolor($widht, $nouvelleHauteur);
        imagecopyresampled($nouvelleImage, $imageChoisie, 0, 0, 0, 0, $widht, $nouvelleHauteur, $taille[0], $taille[1]);
        $this->prepare($sql, $attributes, $class_name, $one);
        $uploadDir = 'C:\wamp64\www\LDMGIT\images\\';
        $uploadFile = $uploadDir . basename($file['name']);
        $imageSmall = $uploadDir . 'small-' . basename($file['name']);
        imagejpeg($nouvelleImage, $imageSmall, 100);
        imagedestroy($imageChoisie);
        if(move_uploaded_file($file['tmp_name'], $uploadFile)){
            return true;
        } else{
            return false;
        }


    }
}