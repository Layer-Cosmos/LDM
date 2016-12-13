
<?php
var_dump($_POST);
var_dump($_FILES);
if(!empty($_POST)){


    $db->addFile($_FILES['image'], 'INSERT INTO article(titre, contenu, image, date)
        VALUES (:titre, :contenu, :image, :date)' ,array(
        'titre' => $_POST['titre'],
        'contenu' => $_POST['contenu'],
        'image' => $_FILES['image']['name'],
        'date' => date('Y-m-d H:i:s')
    ), null, true);
}
$date = date('Y-m-d H:i:s T');
var_dump($date);
?>
<table class="table">
    <thead>
    <tr>
        <td>Id</td>
        <td>Titre</td>
        <td>Date</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($db->query('SELECT id, titre, date FROM article', 'App\Table\Article') as $post): ?>

        <tr>
            <td><?= $post->id; ?></td>
            <td><?= $post->titre; ?></td>
            <td><?= $post->date; ?></td>
            <td> <a class="btn btn-primary">Editer</a></td>
        </tr>

    <?php endforeach; ?>
    </tbody>
</table>



<form method="post" enctype="multipart/form-data">
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