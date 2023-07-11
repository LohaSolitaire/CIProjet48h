<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portefeuille_model extends CI_Model {
    protected $table = 'portefeuille';

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function ajouterPortefeuille($idUtilisateur, $compte) {
        $data = array(
            'idUtilisateur' => $idUtilisateur,
            'compte' => $compte
        );

        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function getPortefeuille($idPortefeuille) {
        $this->db->where('idPortefeuille', $idPortefeuille);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function modifierPortefeuille($idPortefeuille, $compte) {
        $data = array(
            'compte' => $compte
        );

        $this->db->where('idPortefeuille', $idPortefeuille);
        $this->db->update($this->table, $data);
    }

    public function supprimerPortefeuille($idPortefeuille) {
        $this->db->where('idPortefeuille', $idPortefeuille);
        $this->db->delete($this->table);
    }

    public function charger_solde($code) {
        // $code = $this->input->post('code');
        $this->load->model('Code_model');
    
        // Vérifiez si le code existe dans la base de données
        $code_existe = $this->Code_model->verifierCode($code);
    
        if ($code_existe) {
            // Récupérez la valeur du code
            $valeur = $this->Code_model->getValeur($code);
    
            // Ajoutez la valeur au solde du portefeuille de l'utilisateur
            // $idUtilisateur = $this->session->userdata('idUtilisateur');
            // $this->Portefeuille_model->ajouterSolde($idUtilisateur, $valeur);
    
            // Affichez un message de réussite ou redirigez vers une autre page
            // redirect('nom_du_controleur/page_succes');
            echo "Success";
        } else {
            // Affichez un message d'erreur ou redirigez vers une autre page
            // redirect('nom_du_controleur/page_erreur');
            echo "Fail";
        }
    }
}
?>