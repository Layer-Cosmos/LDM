<?php
/**
 * Created by PhpStorm.
 * User: Layer
 * Date: 20/11/2016
 * Time: 01:18
 */
require 'app/Autoloader.php';

App\Autoloader::register();

$db = new App\Database('ldm');


$db->query('SELECT * FROM article');


$content = ob_start();

if(isset($_GET['p'])){
    $p = $_GET['p'];
}else{
    $p = 'home';
}

if($p === 'home'){
    require 'public/home.php';
}
elseif($p === 'single'){
    require 'public/single.php';
}
elseif($p === 'admin'){
    require 'public/menu-admin.php';
}
else{
    require 'public/home.php';
}
$content = ob_get_clean();
require 'public/template/default.php';