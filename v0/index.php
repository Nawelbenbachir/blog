<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon blog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="page">
        <header>
            <a id='titreBlog' href='index.php'> <h1> Mon blog </h1> </a>
            <p>Je vous souhaite la bienvenue sur ce modeste blog</p>
        </header>
        <main>
            <?php
            //Connexion à la bdd (dsn,username,password)
                $bdd=new PDO('mysql:host=localhost;dbname=blog;charset=utf8','root','');
                $articles= $bdd->query('SELECT * FROM articles ORDER BY date DESC');
                //var_dump($articles->fetchAll())
                // :<? équivalent à <?php echo 
                foreach($articles as $article):?>
                <article>
                    <header>
                        <h1 class="titreArticle"> <?php echo $article['titre'];?> </h1>
                        <!--?= equivalent à ?php echo= -->
                        <time><?= $article['date']; ?> </time>
                    </header>
                    <p> <?= $article['contenu']; ?> </p>
                </article>
            <?php endforeach; ?>
        </main>
    </div>
</body>
</html>