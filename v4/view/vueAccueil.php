<?php
    //Chargement des variabels
    $titre="Mon Blog-Articles";
    $baseline="Je vous souhaite la bievenue sur ce modeste blog";
    //ob_ = Output Buffer (tampon de sortie)
    //permet de récupérer les données 
?>
<!-- Démarrage de la temporisation de sortie -->
<?php  ob_start(); ?>
<!-- Boucle de parcours de la liste des artciles -->
<?php foreach($articles as $article):?>
        <article>
            <header>
                <!-- ajout d'un lien vers chaque article quand on clique dessus, le lien contient en php l'ajout de l'id de l'article correspondant -->
                <a href="article.php?id=<?=$article['id']?>"><h1 class="titreArticle"> <?php echo $article['titre'];?> </h1></a>
                <!--?= equivalent à ?php echo= -->
                <time><?= $article['date']; ?> </time>
            </header>
                <p> <?= $article['contenu']; ?> </p>
                </article>
                <hr>
            <?php endforeach; ?>
            <!-- Arret de la temporisation et récupération du tampon de sortie -->
            <?php $contenu=ob_get_clean(); ?>
            <!-- Inclusion du gabarit -->
            <?php require_once "gabarit.php";  ?>
   

    
