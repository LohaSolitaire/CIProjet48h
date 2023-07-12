<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activite_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getActivityDetails($activityId) {
        // Code pour récupérer les détails de l'activité à partir de la base de données
        // Remplacez cette ligne par votre logique de récupération réelle des détails
    
        // Exemple de code pour récupérer les détails de l'activité d'une table nommée 'activities'
        $this->db->where('id', $activityId);
        $query = $this->db->get('activities');
        return $query->row_array();
    }
}