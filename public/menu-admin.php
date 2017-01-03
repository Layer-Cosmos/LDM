
<?php
//var_dump($_POST);
//var_dump($_FILES);
if(!empty($_POST)){

    $db->addFile($_FILES['image'], 'INSERT INTO article(titre, contenu, image, date)
        VALUES (:titre, :contenu, :image, :date)' ,array(
        'titre' => $_POST['titre'],
        'contenu' => $_POST['contenu'],
        'image' => $_FILES['image']['name'],
        'date' => date('Y-m-d H:i:s')
    ), null, true);
    $_POST = null;
}
$date = date('Y-m-d H:i:s T');
//var_dump($date);
?>
<div class="col-lg-8">
    <h1>Gestion d'Articles</h1>
    <div id="ajout-article">
        <p>Ajouter un Article</p>
        <button type="button" class="btn btn-primary">+</button>
        <!--<form id="formulaire-ajout-article">-->
            <!--<label for="titre">Titre : </label><input type="text" name="titre" value="Titre">-->
            <!--<label for="titre">Image : </label><input type="file" name="image" />-->
            <!--<label for="contenu">Contenu : </label><textarea name="contenu"></textarea>-->
            <!--<input type="submit" value="feu">-->
        <!--</form>-->
    </div>

    <table class="table">
        <tbody>
            <tr>
                <td><img src="images/africaine.jpg" width="60px"></td>
                <td>Africaine</td>
                <td>02/12/2016</td>
                <td><button type="button" class="btn btn-primary">Modifier</button></td>
                <td><button type="button" class="btn btn-danger">Supprimer</button></td>
            </tr>
            <tr>
                <td><img src="images/africaine.jpg" width="60px"></td>
                <td>Africaine</td>
                <td>02/12/2016</td>
                <td><button type="button" class="btn btn-primary">Modifier</button></td>
                <td><button type="button" class="btn btn-danger">Supprimer</button></td>
            </tr>
            <tr>
                <td><img src="images/africaine.jpg" width="60px"></td>
                <td>Africaine</td>
                <td>02/12/2016</td>
                <td><button type="button" class="btn btn-primary">Modifier</button></td>
                <td><button type="button" class="btn btn-danger">Supprimer</button></td>
            </tr>
        </tbody>
    </table>

</div>