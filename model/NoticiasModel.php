<?php 

include_once('model/Model.php');

class NoticiasModel extends Model
{
    public $con;
    public $tabela = 'noticias';

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