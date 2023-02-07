<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class accueil extends CI_Controller {
    public function index(){
        $this->load->view('pages/loginAdmin');
        $this->load->view('pages/footer');
    }
}
?>