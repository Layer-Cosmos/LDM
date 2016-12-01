<?php include '../menu.php'; ?>
<form>
    <fieldset class="col-lg-offset-1 col-lg-6">
        <p>
            <label for="titre">Titre :</label><br>
            <input type="text" name="Titre">
        </p>
        <p>
            <label for="image">Image :</label><br>
            <input type="file" name="Image">
        </p>
        <p>
            <label for="texte">Texte :</label><br>
             <textarea rows="4" cols="100"></textarea>
        </p>
        <p><input type="submit" value="Envoyer"></p>
    </fieldset>
</form>

