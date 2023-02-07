<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Controller {
    public function userSigned(){
        $query=$this->db->query('SELECT * FROM Connection WHERE isadmin=false');
        $objects=array();
        foreach($query->result_array() as $row){
            array_push($objects, $row);
        }
        return $objects;
    }
}
?>