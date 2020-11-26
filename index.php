<?php 

include_once('rotas/rotas.php');
include_once('controller/Controller.php');
include_once('controller/NoticiasController.php');

$url = $_SERVER["REQUEST_URI"];
$path = explode("/",ltrim($_SERVER["REQUEST_URI"], '/desafio'));

$rotas = new Rotas();
$rota = $rotas->get_rotas();

if (! isset($rota[$path[0]]) ) {

    echo '<h1>Erro 404</h1>';
    die;

} else {
    $controller = $rota[$path[0]];
}

$novoController = new $controller();
$novoController->index();
