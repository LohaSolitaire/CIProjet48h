<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{
    public function index()
    {
        $this->load->library('session');
        if ($this->session->userdata('logged_in')) {
            redirect('accueil/');
        } else {
            $this->load->view('Login');
        }        
    }

    public function loger() {
        // Récupérer les données de connexion soumises par l'utilisateur
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // Vérifier les informations de connexion
        $this->load->library('session');
        $this->load->model('Utilisateur_model');
        $user = $this->Utilisateur_model->login($email, $password);

        if ($user) {
            // Informations de connexion valides, créer une session pour l'utilisateur
            $userData = array(
                'user_id' => $user->idUtilisateur,
                'nom' => $user->nom,
                'prenom' => $user->prenom,
                'email' => $user->email,
                'mdpHash' => $user->mdpHash,
                'genre' => $user->genre,
                'dateNaissance' => $user->dateNaissance,
                'taille' => $user->taille,
                'poids' => $user->poids,
                'idObjectif' => $user->idObjectif,
                'logged_in' => true
            );

            $this->session->set_userdata($userData);

            // Rediriger vers la page d'accueil ou une autre page appropriée
            redirect('accueil/');
        } else {
            // Informations de connexion invalides, afficher un message d'erreur ou rediriger vers la page de connexion
            redirect('login/');
        }
    }
}
?>