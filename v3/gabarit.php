<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="page">
        <header>
            <a id='titreBlog' href='index.php'> <h1> <?=$titre?> </h1> </a>
            <p><?= $baseline?></p>
        </header>
        <main>
            <?=$contenu?> 
                
        </main>
        <footer>
        Blog réalisé avec PHP, Javscript et HTML
        </footer>
    </div>
    
</body>

</html>