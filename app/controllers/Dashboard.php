<?php 

class Dashboard extends Controller {

    public function index() {
        $data["title"] = "Dashboard";
        $this->view('templates/header');
        $this->view('dashboard/index', $data);
        $this->view('templates/footer');

    }


}