<?php 

class NoticiasController extends Controller
{
    function index()
    {
        $dados = new NoticiasModel();
        $this->dadosModel = $dados->get();
        
        $this->template('NoticiasView');
    }

    function novo()
    {
        $dados = new CategoriasModel();
        $this->dadosModel = $dados->get();

        $this->template('NoticiasNovoView');
    }
}