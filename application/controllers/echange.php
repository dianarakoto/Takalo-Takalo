<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class echange extends CI_Controller {
    public function effectuer(){
        $this->load->model('Historique');
        $echange=array();
        $echange['nombre']=$this->Historique->nombreEchange();
        $this->load->view('pages/header');
        $this->load->view('pages/nombreEchange', $echange);
        $this->load->view('pages/footer');
    }
}

?>