<?php include 'menu.php'; ?>
<h1>Contact</h1>
<div id="coordonnee">
    <h2>Laure De Malibran</h2>
    <p>4 allée Gerard de Nerval <br>56000 Vannes<br>Numéro de téléphone<br>ldm56@hotmail.com<br></p>
</div>
<div id="formulaire">
    <fieldset>

        <p>
            <label for="nom">Votre nom ou pseudonyme (obligatoire)</label><br>
            <input type="text" id="nom" name="nom"/>
        </p>
        <p>
            <label for="email">Votre Email</label><br>
            <input type="email" name="email" id="email"/>
        </p>
        <p>
            <label for="message">Votre message</label><br>
            <textarea name="message" id="message"></textarea>
        </p>
        <p>
            <input type="submit" value="Envoyer"/>
        </p>

    </fieldset>
</div>
