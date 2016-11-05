<?php
/**
 * Created by PhpStorm.
 * User: Layer
 * Date: 04/11/2016
 * Time: 17:14
 */
require 'app/Database.php';
$donne = ('SELECT * FROM LDM');
$db = new Database('ldm');

$article = $db->query('SELECT * FROM article');
var_dump($article);

?>
dsqdqs
<html>
<head>
    <title>LDM</title>
</head>
<body>
    <h2><?= $article->titre ?></h2>
    <p><?= $article->contenu ?></p>
    <img src="image/<?= $article->image ?>" width="400px"/>
</body>
</html>
