<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class profil extends CI_Controller {
        public function index() {
            $this->load->library('session');
            if ($this->session->userdata('logged_in')) {
                $this->load->helper('url');
                $this->load->view('template/header_fo');
                $this->load->view('Profil');
                $this->load->view('template/footer_fo');
            } else {
                redirect('login/');
            }
            
        }

        public function valider_informations() {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('choix_regime', 'Choix du régime', 'required');
            $this->form_validation->set_rules('nom', 'Nom', 'required');
            $this->form_validation->set_rules('prenom', 'Prénom(s)', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('mdp', 'Mot de passe', 'required');
            $this->form_validation->set_rules('date_naissance', 'Date de naissance', 'required');
            $this->form_validation->set_rules('taille', 'Taille', 'required|numeric');
            $this->form_validation->set_rules('poids', 'Poids', 'required|numeric');

            if ($this->input->server('REQUEST_METHOD') === 'POST') {
                if ($this->form_validation->run('valider_informations') === FALSE) {
                    // La validation a échoué, affichez à nouveau le formulaire avec les erreurs
                    $this->load->view('template/header_fo');
                    $this->load->view('Profil');
                    $this->load->view('template/footer_fo');
                } else {
                    $this->load->view('template/header_fo');
                    $this->load->view('Accueil');
                    $this->load->view('template/footer_fo');
                }
            } else {
                $this->load->view('template/header_fo');
                $this->load->view('Profil');
                $this->load->view('template/footer_fo');
            }
            
        }

        public function update_user() {
            $this->load->library('session');
            $idUtilisateur = $this->session->userdata('idUtilisateur');
            $data = array(
                'nom' => $this->input->post('nom'),
                'prenom' => $this->input->post('prenom'),
                'email' => $this->input->post('email'),
                'dateNaissance' => $this->input->post('dateNaissance'),
                'taille' => $this->input->post('taille'),
                'poids' => $this->input->post('poids'),
                'idObjectif' => $this->input->post('idObjectif')
            );
            $this->load->model('Utilisateur_model');
            $this->Utilisateur_model->updateUser($idUtilisateur, $data);
            redirect('deconnexion/deconnecter');
        }

    }
?>