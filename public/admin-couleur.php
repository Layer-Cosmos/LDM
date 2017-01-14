<?php
/**
 * Created by PhpStorm.
 * User: Layer
 * Date: 10/12/2016
 * Time: 22:36
 */

if(!empty($_POST)){
    $db->prepare('UPDATE admin set color = :color WHERE id = 1'
    ,array(
        'color' => $_POST['color']
    ), null, true);
}

?>

<form method="post">
    <label for="color">Choisie la couleur :</label> <input type="text" name="color" />
</form>
