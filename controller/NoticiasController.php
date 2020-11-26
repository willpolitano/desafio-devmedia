<?php 

class NoticiasController extends Controller
{
    public $model = 'NoticiasModel';

    function index()
    {
        $this->model($this->model);
        $this->template();
    }
}