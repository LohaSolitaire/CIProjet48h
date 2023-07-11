<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class portefeuille extends CI_Controller {
        public function index() {
            $this->load->library('session');
            if ($this->session->userdata('logged_in')) {
                $this->load->helper('url');
                $this->load->view('template/header_fo');
                $this->load->view('Portefeuille');
                $this->load->view('template/footer_fo');
            } else {
                redirect('login/');
            }
            
        }

        public function chargerSolde() {
            $code_recharge = $this->input->post('code_recharge');
            $this->load->model('Portefeuille_model');
            $this->Portefeuille_model->charger_solde($code_recharge);
        }
    }
?>