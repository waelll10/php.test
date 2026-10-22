<?php
require_once __DIR__ . '/produit.php';

$data = Produit::inventory();
$produits = array_map(fn($p) => $p['nom'], $data);

require __DIR__ . '/index.php';