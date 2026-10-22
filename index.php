<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Produits</title>
</head>
<body>
    <?php foreach ($produits as $nom): ?>
        <?= $nom ?><br>
    <?php endforeach; ?>
</body>
</html>