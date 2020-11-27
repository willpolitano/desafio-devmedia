<?php 

include_once('model/Model.php');

class CategoriasModel extends Model
{
    public $conexao;
    public $tabela = 'categorias';

    function __construct()
    {
        $this->conexao = $this->getCon();
    }

    function get()
    {
        $consulta = $this->conexao->query("SELECT * FROM $this->tabela");
        return $consulta->fetchAll();
    }
}