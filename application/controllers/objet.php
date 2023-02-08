<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class objet extends CI_Controller {
    
    public function liste(){
        session_start();
        $this->load->model('categorie_model');
        $this->load->model('objets');
        $user=$_SESSION['activeuser'];

        $objet['all']= $this->objets->getObjetUser($user);
        $this->load->view('pages/header');
        $this->load->view('pages/listesObjets', $objet);
        $this->load->view('pages/footer');
    }

    public function sendinsertObjet(){
        $this->load->model('Categorie_model');
        $categorie['categ']=$this->Categorie_model->getAll();
        $this->load->view('pages/header');
        $this->load->view('pages/insererObjet', $categorie);
        $this->load->view('pages/footer');
    }

    public function insert_objet(){
        $this->load->model('objets');
        session_start();
        $proprietaire= $_SESSION['activeuser'];

        $name= $this->input->post('nom');
        $categorie= $this->input->post('categorie');
        $descri= $this->input->post('descri');
        $prix= $this->input->post('prix');

        $this->objets->insertObjet($name,$categorie,$proprietaire,$descri,$prix);
        $this->liste();
    }

    public function send_to_recherche(){
        $this->load->model('Categorie_model');
        $send['categorie']= $this->Categorie_model->getAll();
        // var_dump('eroor');
        $this->load->view('pages/recherche', $send);
    }

    public function recherche(){
        $this->load->model('Search');
        $this->load->model('Categorie_model');
        $send= array();
        $categorie= $this->input->get('categorie');
        $mot= $this->input->get('search');
        $send['results']=$this->Search->checkSearch($mot, $categorie);
        $this->load->view('pages/header');
        $this->load->view('pages/resultat', $send);
        $this->load->view('pages/footer');
    }
}
?>