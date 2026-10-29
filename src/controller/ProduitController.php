<?php
namespace App\Controller;
use App\Model\Produit;
class ProduitController
{
 public function index(): void
 {
 // 1. Récupérer les données du modèle
 $donnees= Produit::inventory();
 // 2. Préparer $produits (array_map, comme dans router_produit.php)
 // 3. Inclure la vue
 require dirname(__DIR__,2). '/vue/produits.php';
 }
}
