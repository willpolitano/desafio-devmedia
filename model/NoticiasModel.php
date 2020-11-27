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

    function insert($dados)
    {
        $stmt = $this->con->prepare('INSERT INTO noticias (titulo, conteudo, id_categoria) VALUES(?,?,?)');
        return $stmt->execute([$dados['titulo'], $dados['conteudo'], $dados['id_categoria']]);
    }
}