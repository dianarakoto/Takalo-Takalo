<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Historique extends CI_Model {
    public function allOwner($objet){
        $query=$this->db->query('SELECT * FROM historique WHERE objet1='.$objet.'');
        $objects=array();
        foreach($query->result_array() as $row){
            array_push($objects, $row);
        }
        return $objects;
    }

    public function nombreEchange(){
        $query=$this->db->query('SELECT * FROM historique WHERE etat=2');
        $objects=array();
        foreach($query->result_array() as $row){
            array_push($objects, $row);
        }
        $nombre=count($objects);
        return $nombre;
    }

}

?>