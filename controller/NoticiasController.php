<?php 

class NoticiasController extends Controller
{
    function index()
    {
        $dados = new NoticiasModel();
        $this->dadosModel = $dados->get();
        
        $this->template('noticias');
    }

    function novo()
    {
        $dados = new CategoriasModel();
        $this->dadosModel = $dados->get();

        $this->template('noticiasNovo');
    }

    function criar()
    {
        $dados = new NoticiasModel();
        $this->dadosModel = $dados->insert($_POST);

        header("location:/desafio/noticias/novo");
    }
}