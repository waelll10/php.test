<?php
class Produit
{
    public string $nom;

    public static function inventory(): array
    {
        return [
            ['nom' => 'Produit 1'],
            ['nom' => 'Produit 2'],
            ['nom' => 'Produit 3'],
        ];
    }
}