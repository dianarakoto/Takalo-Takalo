<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Model {
    public function checkSearch($mot, $idcategorie){
        $sql="SELECT * FROM objet where (description like '%$mot%' OR nomObjet like '%$mot%') and categorie='$idcategorie'";
        $query=$this->db->query($sql);
        $objects=array();
        foreach($query->result_array() as $row){
            array_push($objects, $row);
        }
        return $objects;
    }
} 

?>