<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detaille_sport extends CI_Controller {
    public function details($activityId) {
        // Charger le modèle correspondant à votre table d'activités
        $this->load->model('Activite_model');

        // Obtenir les détails de l'activité en utilisant l'ID
        $data['activity'] = $this->Activite_model->getActivityDetails($activityId);

        // Charger la vue pour afficher les détails de l'activité
        $this->load->view("template/header_admin");
        $this->load->view('activitie_details', $data);
        $this->load->view("template/footer_admin");
    }
}