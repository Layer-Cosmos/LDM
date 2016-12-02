<?php

/**
 * Created by PhpStorm.
 * User: Layer
 * Date: 20/11/2016
 * Time: 01:18
 */

namespace App;

class Autoloader
{
    static function register(){
        spl_autoload_register(array(__CLASS__ , 'autoload'));
    }

    static function autoload($class_name){
        if(strpos($class_name, __NAMESPACE__) === 0){
            $class_name = str_replace(__NAMESPACE__, '', $class_name);
//            $class_name = str_replace('\\', '', $class_name);
            require __NAMESPACE__ . '/' . $class_name . '.php';
        }

    }
}