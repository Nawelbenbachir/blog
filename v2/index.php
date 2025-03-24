<?php
    //Inclusion du modèle
    require_once 'modele.php';
    //fonction qui retourne la liste d'article présents dans la base 
    $articles= getArticles();
    //Inclusion de l'affichage
    //require provoque une erreur fatale si le fichier n'est pas trouvé contrairement à include
    require_once 'vueAccueil.php';
