<?php 

include_once('model/NoticiasModel.php');
include_once('model/CategoriasModel.php');

class Controller
{
    public $dadosModel;

    function template($template)
    {
        include('view/' . $template . '.php');
    }
}