<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class resultat_imc extends CI_Controller {
        public function index() {
            $this->load->library('session');
            if ($this->session->userdata('logged_in')) {
                $poids = $this->input->get('poids');
                $taille = $this->input->get('taille');
                $taille = $taille / 100;
                $imc = $poids / ($taille * $taille);
                $data['imc'] = $imc;

                $this->load->view('template/header_fo');
                $this->load->view('resultat_imc', $data);
                $this->load->view('template/footer_fo');
            } else {
                redirect('login/');
            }
        }
    }
?>