<div id="contenu-page-accueil" class="col-lg-9">
    <section id="partie-article" class="col-lg-8">
        <h1>A la une</h1>
        <?php foreach($db->query('SELECT * FROM article', 'App\Table\Article') as $post): ?>

        <article id="article" class="container">
            <figure>
                <img src="images/small-<?= $post->image; ?>">
            </figure>
            <div id="contenu-article">
<!--                <h3><a href="#" data-toggle="modal" data-target="#myModal">Titre article</a></h3>-->
                <h3><a href="delete.php?id=<?= $post->id; ?>" class="linkm" data-toggle="modal" data-target="#myModal"><?= $post->titreUp(); ?></a></h3>
                <h4>> 30 octobre 2016</h4>
                <p><?= $post->contenu; ?><br><br><span><a href="#">En savoir plus</a></span></p>
            </div>
        </article>
        <?php endforeach; ?>
    </section>


    <aside id="partie-dernier-note" class="container col-lg-3">
        <h2>Derniers notés</h2>
        <article id="dernier-note" class="">
            <figure>
                <img src="images/fleurs.jpg" alt="">
            </figure>
            <div class="info-img-dernier-note">
                <ul>
                    <li class="titre-tableau">Fleurs</li>
                    <li class="icon-commentaire">3</li>
                    <li class="icon-coeur">3</li>
                    <li class="icon-aimer">3</li>
                </ul>
            </div>
        </article>
        <article id="dernier-note" class="">
            <figure>
                <img src="images/cheval.jpg" alt="">
            </figure>
            <div class="info-img-dernier-note">
                <ul>
                    <li class="titre-tableau">Cheval</li>
                    <li class="icon-commentaire">3</li>
                    <li class="icon-coeur">3</li>
                    <li class="icon-aimer">3</li>
                </ul>
            </div>
        </article>
        <article id="dernier-note" class="">
            <figure>
                <img src="images/bateau.jpg" alt="">
            </figure>
            <div class="info-img-dernier-note">
                <ul>
                    <li class="titre-tableau">Bateau</li>
                    <li class="icon-commentaire">3</li>
                    <li class="icon-coeur">3</li>
                    <li class="icon-aimer">3</li>
                </ul>
            </div>
        </article>

    </aside>
</div>