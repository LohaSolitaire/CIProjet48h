<?php
class Inscription_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function enregistrerUtilisateur() {
        $data = array(
            'nom' => $this->input->post('nom'),
            'prenom' => $this->input->post('prenom'),
            'email' => $this->input->post('email'),
            'date' => $this->input->post('date'),
            // 'genre' => $this->input->post('genre'),
            'taille' => $this->input->post('taille'),
            'poids' => $this->input->post('poids'),
            // Ajoutez d'autres champs à enregistrer dans la base de données
        );

        $this->db->insert('utilisateurs', $data);
    }
}