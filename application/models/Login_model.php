<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Login_model extends CI_Model{
    public function checkLoginUtilisateur($mail, $mdp){
        $sql=$this->db->query("SELECT * FROM Connection where Mail='".$mail."' and mdp='".$mdp."' and isAdmin=false");
        $row = $sql->row_array();
        
        if (count($row)>0) {
            return true;
        }
        return false;

    }

    public function checkLoginAdmin($mail, $mdp){
        $sql=$this->db->query("SELECT * FROM Connection where Mail='".$mail."' and mdp='".$mdp."' and isAdmin=true");
        $row = $sql->row_array();

        if (count($row)>0) {
            return true;
        }
        return false;

    }

    public function getUser($mail, $mdp){
        $sql=$this->db->query("SELECT * FROM Connection where Mail='".$mail."' and mdp='".$mdp."' and isAdmin=false");
        $row = $sql->row_array();
        return $row;
    }
}