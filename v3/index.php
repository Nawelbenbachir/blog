<?php
    //Inclusion du modèle
    require_once 'modele.php';
    //try catch pour gérer les erreurs
    try{
        $articles=getArticles();
        require_once 'vueAccueil.php';
    }
    catch(Exception $e){
        //On récupère le msg d'erreur dans la variable $msgErreur qu'on retrouve dans vueErreur 
        $msgErreur = $e->getMessage();
        //on affiche le messsage d'erreur correspondant
        //echo '<html><body>Erreur!'.$e->getMessage().'</body></html>';
        //on aimerait pouvoir être redirigé sur une vue spéciale pour les erreurs
        require_once 'vueErreur.php';
        //page d'erreur plus propre
    }

    

