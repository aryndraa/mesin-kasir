<?php 

    class Home extends Controller {
        public function index () {
            User_model::isLoggedIn();
            $data['judul'] = 'Dashboard';
            $this->view('template/sidebar', $data);
            $this->view('home/index');
            $this->view('template/footer');
        }
    };
