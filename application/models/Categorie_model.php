<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insertCategorie($data)
    {
        // Insérer la catégorie principale dans la table 'aliment'
        $this->db->insert('regime', $data);

        // Récupérer l'ID de la catégorie insérée
        return $this->db->insert_id();
    }

    public function insertSousCategorie($data)
    {
        // Insérer la sous-catégorie dans la table 'sous_aliment'
        $this->db->insert('sous_regime', $data);
    }
}