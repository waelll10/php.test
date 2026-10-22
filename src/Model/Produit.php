<?php
namespace App\Model;
class Produit
{
    public string $nom;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    public static function inventory(): array
    {
        return [
            
           ["nom"=> "Fond de teint "],
           ["nom"=>"Anticerne"],
           ["nom"=>"Rouge à Lèvres "],
           ["nom"=> "Mascara "],
        ];
    }
}




