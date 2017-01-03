<?php
/**
 * Created by PhpStorm.
 * User: Layer
 * Date: 22/11/2016
 * Time: 16:40
 */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laure De Malibran</title>
    <meta name="description" content="Artiste machin"/>
    <meta name="keywords" content="artiste, machin"/>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="../../public/js/bootstrap.js"></script>
    <script src="../../public/js/ajax.js"></script>
    <script src="public/js/script.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel=stylesheet media="screen"/>
</head>

<style>
    <?php foreach($db->query('SELECT color FROM admin', 'App\Table\Article') as $style): ?>
    h1{
        color: <?= $style->color ?>;
    }
    #menu{
        background-color: <?= $style->color ?>;
    }
    .choix{
        border-top-color: <?= $style->color ?>;
        border-bottom-color: <?= $style->color ?>;
        border-left-color: <?= $style->color ?>;
        color: <?= $style->color ?>;
    }
    #test{
        border-left-color: <?= $style->color ?>;
    }
    #contenu-article h3{
        color: <?= $style->color ?>;
    }
    #contenu-article h4{
        color: <?= $style->color ?>;
    }
    #contenu-article a{
        color: <?= $style->color ?>;
    }
    aside{
        border-left-color: <?= $style->color ?>;
    }
    aside h2{
        color: <?= $style->color ?>;
    }
    <?php endforeach; ?>
    section::-webkit-scrollbar {
        display: none;
    }
    #dernier-note h4{
        color: <?= $style->color ?>;
    }
    #dessous{
        color: <?= $style->color ?>;
    }
    /*PAGE CONTACT*/
    #coordonnee h2{
        color: <?= $style->color ?>;
    }
    #formulaire{
        border-left-color: <?= $style->color ?>;
    }
    fieldset label{
        color: <?= $style->color ?>;
    }
    /*PAGE BIOGRAPHIE*/
    #dates{
        background-color: <?= $style->color ?>;
    }
    #partenaire{
        border-color: <?= $style->color ?>;
    }
    #titre-artiste{
        color: <?= $style->color ?>;
    }
    #liste-artiste{
        color: <?= $style->color ?>;
    }
    #liste-artiste a{
        color: <?= $style->color ?>;
    }
    #liste-artiste a li:hover{
        background-color: <?= $style->color ?>;
    }

</style>
<body>
<header>
    <div class="container col-lg-3" id="menu">
        <img class="logo" src="images/logoldm.png" alt="Logo Laure De Malibran"/>
        <nav id="onglet-menu">
            <ul>
                <a href="test.php?p=admin"><li class="onglet-choisi">Gestion des Articles</li></a>
                <a href="test.php?p=admin"><li>Gestion des Commentaires</li></a>
                <a href="biographie.php"><li>Gestion de la Biographie</li></a>
                <a href="galerie.php"><li>Gestion de la Couleur</li></a>
                <a href="contact.php"><li>Statistique</li></a>
            </ul>
        </nav>
        <figure id="reseaux-sociaux">
            <a class="reseaux" href="#"><img src="images/facebook.png" alt="Reseaux sociaux : Facebook"/></a>
            <a class="reseaux" href="#"><img src="images/pinterest.png" alt="Reseaux sociaux : Pinterest"/></a>
        </figure>
        <div id="copyright">
            <p>Copyright &copy;<br>
                <a href="#">Pierre-Yves Lotode</a> - <a href="#">Kevin Alary</a> - <a href="#">Claire Erhard</a></p>
        </div>
    </div>
</header>
        <?= $content; ?>
</body>
</html>

