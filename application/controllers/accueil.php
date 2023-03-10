<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class accueil extends CI_Controller {
    public function index(){
        $this->load->view('pages/loginAdmin');
        $this->load->view('pages/footer');
    }

    public function check_User(){
        $this->load->model('login_model');
        session_start();
        $user= $this->input->post('email');
        $pass= $this->input->post('password');

        $fonction= $this->login_model->checkLoginUtilisateur($user, $pass);

        if ($fonction) {
            $active=$this->login_model->getUser($user, $pass);
            $_SESSION['activeuser']=$active['idUtilisateur'];
            $this->load->view('pages/header');
            $this->load->view('pages/usermenu');
            $this->load->view('pages/footer');
        } else{
            $this->load->view('pages/User');
            $this->load->view('pages/footer');
        }
    }

    public function check_Admin(){
        $this->load->model('login_model');

        $user= $this->input->post('email');
        $pass= $this->input->post('password');

        $fonction= $this->login_model->checkLoginAdmin($user, $pass);

        if ($fonction) {
            $this->load->view('pages/header');
            $this->load->view('pages/blank');
            $this->load->view('pages/footer');
        } else{
            $this->load->view('pages/loginAdmin');
            $this->load->view('pages/footer');
        }
    }

    public function ajoutInscription(){
        $this->load->model('inscription_model');

        $mail= $this->input->post('email');
        $password= $this->input->post('password');

        $this->inscription_model->inscription($mail, $password);
        $this->load->view('pages/User');
        $this->load->view('pages/footer');
    }

    public function connectUser(){
        $this->load->view('pages/User');
        $this->load->view('pages/footer');
    }

    public function connectAdmin(){
        $this->load->view('pages/loginAdmin');
        $this->load->view('pages/footer');
    }

    public function signin(){
        $this->load->view('pages/inscription');
        $this->load->view('pages/footer');
    }

    public function list_categorie(){
        $this->load->model('Categorie_model');
        $categories=array();
        $categories['all']= $this->Categorie_model->getAll();
        $this->load->view('pages/header');
        $this->load->view('pages/listecategorie', $categories);
        $this->load->view('pages/footer');
    }

    public function ajout_categorie(){
        $this->load->model('categorie_model');

        $categorie= $this->input->post('categorie');

        $fonction= $this->categorie_model->insertCategorie( $categorie);
        $this->list_categorie();
        
    }

    public function modifier_categorie($id){
        $this->load->model('categorie_model');
        $ide['id']=$id;
        $this->load->view('pages/modification',$ide);
    }
    public function new_modif_categorie(){
        $this->load->model('categorie_model');
        $id= $this->input->post('id');
        $categorie= $this->input->post('modif');

        $function=  $this->categorie_model->updateCategorie($id, $categorie);
        // $this->load->controller('accueil/list_categorie');
        $this->list_categorie();
    }

    public function supprimer_categorie($id){
        $this->load->model('categorie_model');
        $this->categorie_model->delete_categorie($id);
        $this->list_categorie();
    }

    public function menu(){
        $this->load->view('pages/header');
        $this->load->view('pages/blank');
        $this->load->view('pages/footer');
    }

    public function usermenu(){
        $this->load->view('pages/header');
        $this->load->view('pages/usermenu');
        $this->load->view('pages/footer');
    }

    public function inserer(){
        $this->load->view('pages/header');
        $this->load->view('pages/accueil');
        $this->load->view('pages/footer');
    }

    public function logout(){
        session_start();
        session_destroy();
        $this->load->view('pages/User'); 
        $this->load->view('pages/footer');
    }

}
?>