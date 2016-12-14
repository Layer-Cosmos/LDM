<?php
/**
 * Created by PhpStorm.
 * User: Layer
 * Date: 01/12/2016
 * Time: 03:04
 */



if(!empty($_POST)){
    $db->prepare('INSERT INTO article(titre, contenu, image)
        VALUES (:titre, :contenu, :image)' ,array(
        'titre' => $_POST['titre'],
        'contenu' => $_POST['contenu'],
        'image' => 'salut.jpg'
    ), null, true);
}



?>

<form method="post">
    <label for="titre">Titre : </label><input type="text" name="titre" value="Titre">
    <label for="contenu">Contenu : </label><textarea name="contenu"></textarea>
    <input type="submit" value="feu">
</form>


