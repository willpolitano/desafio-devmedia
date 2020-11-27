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

    function criar()
    {
        $dados = new NoticiasModel();
        $this->dadosModel = $dados->insert($_POST);

        header("location:/desafio/noticias/novo");
    }
}