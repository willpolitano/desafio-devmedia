<?php 

include_once('Atributos.php');

class Model
{
    public function getCon()
    {
        $atributos = new Atributos();
        $credenciais = $atributos->atributos();

        return new pdo('mysql:host=' . $credenciais['HOST'] . ';dbname=' . $credenciais['DBNAME'], $credenciais['USER'], $credenciais['PASS']);
    }
}