<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
    public function checkSearch($mot, $idcategorie){
        $sql="SELECT * FROM objet where description like %$mot% and idCategorie='$idcategorie'";
        $objects=array();
        foreach($query->result_array() as $row){
            array_push($objects, $row);
        }
        return $objects;
        
    }
} 

?>