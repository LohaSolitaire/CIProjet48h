<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SportController extends CI_Controller {
    public function index() {
        $data['activities'] = array(
            array('name' => 'Gymnastique au sol', 'location' => 'Local', 'date' => '2023-07-15'),
            array('name' => 'Natation', 'location' => 'ANS Ampefiloha', 'date' => '2023-07-17'),
            array('name' => 'Basketball', 'location' => 'Gymnaze Mahamasina', 'date' => '2023-07-16'),
            array('name' => 'Tennis', 'location' => 'Courts de tennis C', 'date' => '2023-07-17'),
            array('name' => 'Musculation', 'location' => 'Temple Muscle Mahamasina', 'date' => '2023-07-17')
        );
        $this->load->view("template/header_admin");
        $this->load->view('sport_activitie', $data);
        $this->load->view("template/footer_admin");
    }
    public function supprimerActivite($activityId) {
        
        echo "Activité avec ID $activityId supprimée.";
    }
    public function details($id) {
        // Récupérez les détails de l'activité avec l'ID spécifié depuis la base de données
        // Passez les détails à la vue appropriée pour affichage
        $data['activity'] = $this->Activite_model->get_activity_details($id);
        $this->load->view('activity_details', $data);
    }
    public function exist(){
        if (isset($_POST['delete_activity'])) {
            $activityId = $_POST['activity'];
            supprimerActivite($activityId);
        }
    }
    
}
?>
