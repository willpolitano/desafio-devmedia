<?php 

class NoticiasController extends Controller
{
    public $model = 'NoticiasModel';

    function index()
    {
        $dados = new $this->model();
        $this->dadosModel = $dados->get();
        
        $this->getView($this->model);
        $this->template();
    }

    function novo()
    {
        echo 'novo';die;
    }
}