
<?php
var_dump($_POST);
var_dump($_FILES);
if(!empty($_POST)){


    $db->addFile($_FILES['image'], 'INSERT INTO article(titre, contenu, image)
        VALUES (:titre, :contenu, :image)' ,array(
        'titre' => $_POST['titre'],
        'contenu' => $_POST['contenu'],
        'image' => $_FILES['image']['name']
    ), null, true);
}
?>

<form method="post" action="#" enctype="multipart/form-data">
    <fieldset class="col-lg-offset-1 col-lg-6">
        <p>
            <label for="titre">Titre :</label><br>
            <input type="text" name="titre">
        </p>
        <p>
            <label for="image">Image :</label><br>
            <input type="file" name="image">
        </p>
        <p>
            <label for="contenu">Texte :</label><br>
             <textarea rows="4" cols="100" name="contenu"></textarea>
        </p>
        <p><input type="submit" value="Envoyer"></p>
    </fieldset>
</form>

