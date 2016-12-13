<section  class="col-lg-offset-1 col-lg-5">
    <h1>A la une</h1>
    <?php foreach($db->query('SELECT * FROM article', 'App\Table\Article') as $post): ?>
    <article id="article">
        <div id="image"><img src="images/<?= $post->image; ?>"></div>
        <div id="contenu-article">
           <h3><a href="#" data-toggle="modal" data-target="#myModal"><?= $post->titreUp(); ?></a></h3>
           <h4>><?= $post->date; ?></h4>
           <p><?= $post->contenu; ?><br><br><span><a href="#">En savoir plus</a></span></p>
        </div>
    </article>
    <?php endforeach; ?>
</section>
<aside  class="col-lg-offset-1 col-lg-2">
    <h2>Derniers notés</h2>
    <article id="dernier-note">
        <img src="images/africaine.jpg">
        <div id="dessous">
            <ul>
                <li class="titre-tableau">Africaine</li>
                <li class="commentaire">3</li>
                <li class="coeur">3</li>
                <li class="aimer">3</li>
            </ul>
        </div>
    </article>
    <article id="dernier-note">
        <img src="images/africaine.jpg">
        <div id="dessous">
            <ul>
                <li class="titre-tableau">Africaine</li>
                <li class="commentaire">3</li>
                <li class="coeur">3</li>
                <li class="aimer">3</li>
            </ul>
        </div>
    </article>
    <article id="dernier-note">
        <img src="images/africaine.jpg">
        <div id="dessous">
            <ul>
                <li class="titre-tableau">Africaine</li>
                <li class="commentaire">3</li>
                <li class="coeur">3</li>
                <li class="aimer">3</li>
            </ul>
        </div>
    </article>
</aside>

</body>
</html>