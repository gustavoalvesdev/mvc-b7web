<?php 

require_once __DIR__ . '/../core/Controller.php';

class NotFoundController extends Controller
{

    public function index()
    {
        $this->view('404/404');
    }

}