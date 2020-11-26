<?php 

include_once('model/NoticiasModel.php');

class Controller
{
    public $dadosModel;
    public $template;

    function model($model)
    {
        $dados = new $model();
        $this->dadosModel = $dados->get();
        $this->view = str_replace('Model', 'View', $model);
    }

    function template()
    {
        include('view/' . $this->view . '.php');
    }
}