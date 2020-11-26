<?php 

include_once('model/NoticiasModel.php');

class Controller
{
    public $dadosModel;
    public $template;

    function template()
    {
        include('view/' . $this->template . '.php');
    }
}