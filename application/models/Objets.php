<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objets extends CI_Controller {
    public function getObjetUser($user){
        $query=$this->db->query('SELECT * FROM objet WHERE proprietaire='.$user);
        $objects=array();
        foreach($query->result_array() as $row){
            array_push($objects, $row);
        }
        return $objects;
    }

    public function updateObjet($idObjet, $description, $prix){
        $query=$this->db->query('UPDATE objet SET description=%s AND prix=%s WHERE idObjet=%s');
        $query=sprintf($query, $this->db->escape($description), $this->db->escape($prix), $this->db->escape($idObjet));
        $this->db->query($query);
    }

    public function insertObjet($nom, $categorie, $proprietaire, $description, $prix){
        $query=$this->db->query('INSERT INTO objet VALUES (null, %s, %s, %s, %s, %s)');
        $query=sprintf($query, $this->db->escape($nom), $this->db->escape($categorie), $this->db->escape($proprietaire), $this->db->escape($description), $this->db->escape($prix), $this->db->escape($idObjet));
        $this->db->query($query);
    }

    public function exchangeObject($user, $otheruser, $userObjet, $otheruserObjet){
        
    }
}

?>