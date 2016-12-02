<?php

/**
 * Created by PhpStorm.
 * User: Layer
 * Date: 30/11/2016
 * Time: 01:28
 */

namespace App\Table;

class Article
{
    public function titreUp(){
        return ucfirst($this->titre);
    }
}