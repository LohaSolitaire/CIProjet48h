<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert($data) {
        $this->db->insert('utilisateur', $data);
    }

    public function login($email, $password) {
        $this->db->where('email', $email);
        $query = $this->db->get('utilisateur');

        if ($query->num_rows() == 1) {
            $user = $query->row();

            // Vérifier le mot de passe
            if (password_verify($password, $user->mdpHash)) {
                // Connexion réussie, retourner l'objet utilisateur
                return $user;
            }
        }

        return false;
    }

    public function updateUser($idUtilisateur, $data) {
        $this->load->library('session');
        $this->db->where('idUtilisateur', $idUtilisateur);
        $this->db->update('utilisateur', $data);
    }
}
?>