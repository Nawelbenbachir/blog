<?php

require_once './models/modele.php';
function accueil(){
    $articles=getArticles();
    require './view/vueAccueil.php';
}

//Affiche les détails sur un article
function article($ArticleId){
    $article=getArticle($ArticleId);
    $commentaires=getCommentaires($ArticleId);
    require './view/vueArticle.php';
}

//Affiche une erreur
function erreur($msgErreur){
    require './view/vueErreur.php';
}