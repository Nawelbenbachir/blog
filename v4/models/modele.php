<?php    

function getArticles(){
    // connexion à la bdd (dsn,username,password,options en plus pour la gestion des erreurs)
    $bdd=getBdd();
    //récupération des articles
    $articles= $bdd->query('SELECT * FROM articles ORDER BY date DESC');
    return $articles;
}

//Récupère les données d'un article avec id donné en argument 
function getArticle($ArticleId){
    $bdd=getBdd();
    $article= $bdd->prepare('SELECT * FROM articles WHERE id= :id');
    $article->execute(array( 'id' => $ArticleId));
    if($article->rowCount()==1)
        return $article->fetch();
    else
        throw new Exception ("Aucun article ne correspond à l'identifiant '$Id'");
}

function getCommentaires($ArticleId){
   $bdd=getBdd();
   $commentaires=$bdd->prepare('SELECT * FROM commentaires WHERE article_id= :article_id');
   $commentaires->execute (array('article_id'=>$ArticleId));
   return $commentaires;
}

//éviter de saisir plusieurs fois la ^m ligne 
function getBdd(){
    $bdd=new PDO('mysql:host=localhost;dbname=blog;charset=utf8','root','',array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}
   