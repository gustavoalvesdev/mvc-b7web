<?php 

require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Usuario.php';

class HomeController extends Controller
{

    public function index()
    {
        $usuario = new Usuario();
        $data = $usuario->getUserData();

        $nome = 'Gustavo Alves';
        $idade = 33;
        $this->view('home/index', $data);
    }

}
