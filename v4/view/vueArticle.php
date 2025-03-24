<?php
    $titre="Mon Blog - Mon blog!!!";
    $baseline="Bienvenue sur ce modeste blog";
    
?>
    <?php ob_start(); ?>
    <article>
        <header>
            <h1 class="titreArticle"><?= $article['titre']; ?> </h1>
            <time><?=$article['date']; ?> </time>
        </header>
        <p><?=$article['contenu'];?> </p>
    </article>
    <hr>
    <h2>Commentaires</h2>
    <?php foreach($commentaires as $commentaire): ?>
        <p><?=$commentaire['auteur'];?> dit : </p>
        <p><?=$commentaire['contenu'];?>  </p>
    <?php endforeach ?>
    
    <?php  $contenu= ob_get_clean() ?>


    <?php require_once "gabarit.php"; ?>