<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  print_r($donnees);
  ?>  
</body>
</html>

<?php require __DIR__ . '/partials/header.php'; ?>
<h1><?= htmlspecialchars($titre) ?></h1>
<ul class="produits">
 <?php foreach ($produits as $produit): ?>
 <li><?= htmlspecialchars($produit) ?></li>
 <?php endforeach; ?>
</ul>
<?php require __DIR__ . '/partials/footer.php'; ?>