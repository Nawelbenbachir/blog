<?php
    $titre="Mon Blog - Erreur !!!";
    $baseline="Une erreur s'est malheureusement produite !";
    
?>
    <?php ob_start(); ?>
    <p>Une erreur est survenue : <?= $msgErreur ?> </p>
    <?php  $contenu= ob_get_clean() ?>
    <!-- $contenu=$e->getMessage(); -->
    <?php require "gabarit.php"; ?>