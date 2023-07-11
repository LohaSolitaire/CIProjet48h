<?php
defined('BASEPATH') or exit('No direct script access allowed');

class deconnexion extends CI_Controller
{
    public function deconnecter() {
        $this->load->library('session');
        $this->session->unset_userdata('logged_in');
        if($this->session->userdata('nom')) {
            $this->session->unset_userdata('nom');
        }
        if($this->session->userdata('prenom')) {
            $this->session->unset_userdata('prenom');
        }
        if($this->session->userdata('email')) {
            $this->session->unset_userdata('email');
        }
        if($this->session->userdata('mdpHash')) {
            $this->session->unset_userdata('mdpHash');
        }
        if($this->session->userdata('genre')) {
            $this->session->unset_userdata('genre');
        }
        if($this->session->userdata('dateNaissance')) {
            $this->session->unset_userdata('dateNaissance');
        }
        if($this->session->userdata('taille')) {
            $this->session->unset_userdata('taille');
        }
        if($this->session->userdata('poids')) {
            $this->session->unset_userdata('poids');
        }
        if($this->session->userdata('idObjectif')) {
            $this->session->unset_userdata('idObjectif');
        }
        redirect('login/');
    }
}
?>