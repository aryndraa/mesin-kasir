<?php 

class Menus extends Controller
{
    public function index () {
        $data['title'] = 'Menus';
        $this->view('templates/header');
        $data['menus'] = $this->model('Menus_model') -> getAllMenus();
        $this->view('menus/index', $data);
        $this->view('templates/footer');
    }
}