<?php 

include_once('model/NoticiasModel.php');

class Controller
{
    public $dadosModel;
    public $template;

    function getView()
    {
        $this->template = str_replace('Model', 'View', $this->model);
    }

    function template()
    {
        include('view/' . $this->template . '.php');
    }
}