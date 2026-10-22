<?php

$chemin= str_replace('public','',__DIR__);

require $chemin . '/vendor/autoload.php';
$router = new \Bramus\Router\Router();
$router->get('/', function () {
 echo 'Accueil';
});
$router->get('/status', function () {
echo "wael jabri";
});
$router->get('/hello/(\w+)', function (string $nom) {
 echo 'Bonjour ' . htmlspecialchars($nom);
});
$router->set404(function () {
 http_response_code(404);
 echo 'Page introuvable';
});
$router->run();
