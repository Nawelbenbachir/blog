<?php    

function getArticles(){
    // connexion à la bdd (dsn,username,password,options en plus pour la gestion des erreurs)
    $bdd=new PDO('mysql:host=localhost;dbname=blog;charset=utf8','root','',array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    //récupération des articles
    $articles= $bdd->query('SELECT * FROM articles ORDER BY date DESC');
    return $articles;
}
//Récupère les données d'un article avec id donné en argument 
function getArticle($idArticle){
    $bdd=new PDO('mysql:host=localhost;dbname=blog;charset=utf8','root','',array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $article= $bdd->prepare('SELECT * FROM articles WHERE id= :id');
    $article->execute(array( 'id' => $idArticle));
    if($article->rowCount()==1)
        return $article->fetch();
    else
        throw new Exception ("Aucun article ne correspond à l'identifiant '$idArticle'");
}

function getCommentaires($idArticle){

}
   