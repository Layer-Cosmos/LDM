<?php
/**
 * Created by PhpStorm.
 * User: Layer
 * Date: 16/12/2016
 * Time: 17:00
 */
require 'Database.php';

$db = new \App\Database('Ldm');
foreach($db->prepare('SELECT * FROM article WHERE id = :id'
    ,array(
        'id' => $_GET['id']
    ), null, true) as $modal){
    $json[] = $modal;
}
echo json_encode($json);

