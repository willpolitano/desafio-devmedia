<?php 

include_once('model/Model.php');

class CategoriasModel extends Model
{
    public $con;
    public $tabela = 'categorias';

    function __construct()
    {
        $this->con = $this->getCon();
    }

    function get()
    {
        $consulta = $this->con->query("SELECT * FROM $this->tabela");
        return $consulta->fetchAll();
    }
}