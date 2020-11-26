<?php 

class NoticiasController extends Controller
{
    public $model = 'NoticiasModel';

    function index()
    {
        $dados = new $this->model();
        $this->dadosModel = $dados->get();
        $this->template = str_replace('Model', 'View', $this->model);
        $this->template();
    }
}