<?php    

function getArticles(){
    // connexion à la bdd
    $bdd=new PDO('mysql:host=localhost;dbname=blog;charset=utf8','root','');
    //réxupération des articles
    $articles= $bdd->query('SELECT * FROM articles ORDER BY date DESC');
    return $articles;
}
   