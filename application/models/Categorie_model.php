<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Categorie_model extends CI_Model{
    public function insertCategorie($nom){
        $sql= "INSERT INTO Categorie VALUES (null, %s)";
        $sql= sprintf($sql, $this->db->escape($nom));
        $this->db->query($sql);
    }

    public function getAll(){
        $query=$this->db->query('SELECT * FROM categorie');
        $categories=array();
        foreach($query->result_array() as $row)
        {
            array_push($categories, $row);
        }
        return $categories;
    }

    public function updateCategorie($id, $nom){
        $sql= "UPDATE Categorie SET Nom='$nom' WHERE idcategorie='".$id."'";
        $sql= sprintf($sql, $this->db->escape($id));
        $this->db->query($sql);
    }

    public function delete_categorie($id){
        $sql="DELETE FROM Categorie Where idcategorie='".$id."'";
        $sql= sprintf($sql, $this->db->escape($id));
        $this->db->query($sql);
    }
}
?>