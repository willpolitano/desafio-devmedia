<?php 

include_once('rotas/rotas.php');
include_once('controller/Controller.php');
include_once('controller/NoticiasController.php');

$url = $_SERVER["REQUEST_URI"];
$rota = explode("/",ltrim($_SERVER["REQUEST_URI"], '/desafio'));

$controller = isset($rotas[$rota[0]]) ? $rotas[$rota[0]] : null;
$metodo = isset($rota[1]) ? $rota[1] : 'index';

if (! isset($controller) ) {

    echo '<h1>Erro 404</h1>';
    die;
}

$novoController = new $controller();
$novoController->$metodo();
