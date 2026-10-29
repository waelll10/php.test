
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($titre ?? 'Mon site') ?></title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
 
<header class="header">
    <div class="header__inner">
        <a href="index.php" class="logo">Mon<span>Site</span></a>
         <a  href="/css/style.css">lien</a>
 
        <nav class="nav">
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php?action=liste">Liste</a></li>
                <li><a href="index.php?action=ajouter">Ajouter</a></li>
            </ul>
        </nav>
    </div>
</header>
 
<main>
 