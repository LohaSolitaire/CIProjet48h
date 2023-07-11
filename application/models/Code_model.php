<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Code_model extends CI_Model {
    protected $table = 'code';

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function ajouterCode($code, $valeur) {
        $data = array(
            'code' => $code,
            'valeur' => $valeur
        );

        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function getCode($idCode) {
        $this->db->where('idCode', $idCode);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function getValeur($code) {
        $this->db->select('valeur');
        $this->db->where('code', $code);
        $query = $this->db->get($this->table);
        return $query->row()->valeur;
    }    

    public function modifierCode($idCode, $code, $valeur) {
        $data = array(
            'code' => $code,
            'valeur' => $valeur
        );

        $this->db->where('idCode', $idCode);
        $this->db->update($this->table, $data);
    }

    public function supprimerCode($idCode) {
        $this->db->where('idCode', $idCode);
        $this->db->delete($this->table);
    }

    public function verifierCode($code) {
        $this->db->where('code', $code);
        $query = $this->db->get('code');
        return $query->num_rows() > 0;
    }
    
}
?>