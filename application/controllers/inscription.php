<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inscription extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Inscription_model');
    }

    public function index() {
        $this->load->view('inscription_view');
    }

    public function enregistrer() {
        $this->form_validation->set_rules('nom', 'Nom', 'required');
        $this->form_validation->set_rules('prenom', 'prenom','required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('date', 'date','required');
        // $this->form_validation->set_rules('genre', 'genre','required');
        $this->form_validation->set_rules('taille', 'taille','required');
        $this->form_validation->set_rules('poids', 'poids','required');

        // Ajoutez d'autres règles de validation selon vos besoins

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('inscription_view');
        } else {
            $this->inscription_model->enregistrerUtilisateur();
            // Redirigez vers une page de succès ou affichez un message de confirmation
        }
    }
}