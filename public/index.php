<?php

$chemin= str_replace('public','',__DIR__);

require $chemin . '/vendor/autoload.php';
var_dump(App\Model\Produit::inventory());