<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class accueil extends CI_Controller {
        public function index() {
            $this->load->library('session');
            if ($this->session->userdata('logged_in')) {
                $this->load->view('template/header_fo');
                $this->load->view('Accueil');
                $this->load->view('template/footer_fo');
            } else {
                redirect('login/');
            }
            
        }
    }
?>