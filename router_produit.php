<?php

require_once __DIR__ . '/../model/produit.php';

$items = Produit::inventory();
$produits = array_map(
    static fn ($produit): string => $produit["nom"],
    $items
);

require_once __DIR__ . '/../vue/index.php';