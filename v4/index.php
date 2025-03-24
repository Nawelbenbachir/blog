<?php
    //Inclusion du modèle
    require_once 'controleur.php';
    //try catch pour gérer les erreurs
    try{
       if(isset($_GET['action'])){
            if($_GET['action']=='article'){
                if (isset($_GET['id'])){
                    $articleId=intval($_GET['id']);
                    if ($articleId!=0){
                        article($articleId);
                    }

                    else{
                        throw new Exception("Identifiant d'article non valide");
                    }
                }
            }
            else{
                throw new Exception("Action non valide");
            } 
       }
        else{
            accueil();
        } 
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

    

