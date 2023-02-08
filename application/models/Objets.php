<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objets extends CI_Model {
    public function getObjetUser($user){
        $query=$this->db->query('SELECT * FROM objet WHERE proprietaire='.$user.'');
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
        $query="INSERT INTO Objet VALUES (null, %s, %s, %s, %s, %s)";
        $query=sprintf($query, $this->db->escape($nom), $this->db->escape($categorie), $this->db->escape($proprietaire), $this->db->escape($description), $this->db->escape($prix));
        $this->db->query($query);
    }

    public function askExchange($user, $otheruser, $userObjet, $otheruserObjet){
        $query=$this->db->query('INSERT INTO historique VALUES (null, %s, %s, %s, %s, 0)');
        $query=sprintf($query, $this->db->escape($user), $this->db->escape($userObjet), $this->db->escape($otheruser), $this->db->escape($otheruserObjet));
        $this->db->query($query);
    }

    public function listProposition($user){
        $query=$this->db->query('SELECT * FROM historique WHERE utilisateur2='.$user.'');
        $objects=array();
        foreach($query->result_array() as $row){
            array_push($objects, $row);
        }
        return $objects;
    }

    public function declineExchange($user, $otheruser, $userObjet, $otheruserObjet){
        $decline="UPDATE historique SET etat=2 WHERE utilisateur1='$user' AND utilisateur2='$otheruser' AND objet1='$userObjet' AND objet2='$otheruserObjet' AND etat=0";
        $this->db->query($decline);
    }

    public function exchangeObject($user, $otheruser, $userObjet, $otheruserObjet){
        $accepter="UPDATE historique SET etat=1 WHERE utilisateur1='$user' AND utilisateur2='$otheruser' AND objet1='$userObjet' AND objet2='$otheruserObjet' AND etat=0";
        $query="UPDATE objet SET proprietaire=%s WHERE idObjet=%s";
        $query=sprintf($query, $this->db->escape($otheruser), $this->db->escape($userObjet));
        $sql="UPDATE objet SET proprietaire=%s WHERE idObjet=%s";
        $sql=sprintf($sql, $this->db->escape($user), $this->db->escape($otheruserObjet));
        $this->db->query($query);
        $this->db->query($sql);
        $this->db->query($accepter);
    }
}

?>