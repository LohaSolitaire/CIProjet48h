<?php
defined('BASEPATH') or exit('No direct script access allowed');

class inscription extends CI_Controller
{
    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('Inscription');
    }

    public function inscrire() {
        // Récupérer les données du formulaire d'inscription
        $nom = $this->input->post('nom');
        $prenom = $this->input->post('prenom');
        $email = $this->input->post('email');
        $mdp = $this->input->post('password');
        $genre = ($this->input->post('sexe') == 'homme') ? 1 : 0;
        $dateNaissance = $this->input->post('date_naissance');
    
        // Générer le hash du mot de passe
        $mdpHash = password_hash($mdp, PASSWORD_DEFAULT);
    
        // Préparer les données à insérer dans la table "utilisateur"
        $data = array(
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'mdpHash' => $mdpHash,
            'genre' => $genre,
            'dateNaissance' => $dateNaissance
        );
    
        // Insérer l'utilisateur dans la base de données
        $this->load->model('utilisateur_model');
        $this->utilisateur_model->insert($data);
    
        // Rediriger vers la page de connexion ou afficher un message de succès
        redirect($uri = 'login/');
    }
    
}
