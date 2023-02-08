<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
    public function liste(){
        $this->load->model('Utilisateur');
        $users=array();
        $users['utilisateur']=$this->Utilisateur->userSigned();
        $this->load->view('pages/header');
        $this->load->view('pages/listUser', $users);
        $this->load->view('pages/footer');
    }
}
?>