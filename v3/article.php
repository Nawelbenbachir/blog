<?php
    //Inclusion du modèle
    require_once 'modele.php';
    //try catch pour gérer les erreurs
    try{
        //cherche les données de l'article
        if(isset($_GET['id'])){
            //intval vérifie que le numéro de l'id récupéré est valide
            $id= intval($_GET['id']);
            if($id!=0){
                $article=getArticle($id);
                $commentaires=getCommentaires($id);
                require_once 'vueArticle.php';
            }
            else{
                //provoque une erreur 
                throw new Exception("Identifiant d'article non valide");
            }
        }
        else{
            throw new Exception("Aucun identifiant d'article n'a été transmis");
        }
    }
    //Exception permet de pouvoir récupérer la variable d'erreur
    catch(Exception $e){
        //On récupère le msg d'erreur dans la variable $msgErreur qu'on retrouve dans vueErreur 
        $msgErreur = $e->getMessage();
        //on affiche le messsage d'erreur correspondant
        //echo '<html><body>Erreur!'.$e->getMessage().'</body></html>';
        //on aimerait pouvoir être redirigé sur une vue spéciale pour les erreurs
        require_once 'vueErreur.php';
        //page d'erreur plus propre
    }