<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Inscription_model extends CI_Model{
    public function inscription($email, $mdp){
        $sql= "INSERT INTO Connection VALUES (null, %s, %s, false)";
        $sql= sprintf($sql, $this->db->escape($email), $this->db->escape($mdp));
        $this->db->query($sql);
    }
}

?>