<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class accueil extends CI_Controller {
    public function index(){
        $this->load->view('pages/loginAdmin');
        $this->load->view('pages/footer');
    }

    public function check_User(){
        $this->load->model('login_model');

        $user= $this->input->post('email');
        $pass= $this->input->post('password');

        $fonction= $this->login_model->checkLoginUtilisateur($user, $pass);

        if ($fonction) {
            $this->load->view('pages/Article');
        } else{
            $this->load->view('pages/User');
        }
    }

    public function check_Admin(){
        $this->load->model('login_model');

        $user= $this->input->post('email');
        $pass= $this->input->post('password');

        $fonction= $this->login_model->checkLoginAdmin($user, $pass);

        if ($fonction) {
            $this->load->view('pages/accueil');
        } else{
            $this->load->view('pages/loginAdmin');
        }
    }

    public function ajoutInscription(){
        $this->load->model('inscription_model');

        $mail= $this->input->post('email');
        $password= $this->input->post('password');

        $this->inscription_model->inscription($mail, $password);
        $this->load->view('pages/User');
    }

    public function connectUser(){
        $this->load->view('pages/User');
    }

    public function connectAdmin(){
        $this->load->view('pages/loginAdmin');
    }

    public function signin(){
        $this->load->view('pages/inscription');
    }
}
?>