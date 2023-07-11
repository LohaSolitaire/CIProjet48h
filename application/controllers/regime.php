<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class regime extends CI_Controller {

        public function index() {
            $this->load->library('session');
            if ($this->session->userdata('logged_in')) {
                $this->load->helper('url');
                $this->load->view('template/header_fo');
                $this->load->view('Regime');
                $this->load->view('template/footer_fo');
            } else {
                redirect('login/');
            }  
        }
        
        public function valider_form_imc() {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('poids', 'Poids', 'required|greater_than[0]');
            $this->form_validation->set_rules('taille', 'Taille', 'required|greater_than[50]');

            if ($this->input->server('REQUEST_METHOD') === 'POST') {
                if ($this->form_validation->run('valider_form_imc') === FALSE) {
                    redirect($uri = 'regime/');
                } else {
                    $poids = $this->input->post('poids');
                    $taille = $this->input->post('taille');
                    redirect($uri = 'resultat_imc/?poids='.urlencode($poids).'&taille='.urlencode($taille), 'refresh');
                }
            } else {
                redirect($uri = 'regime/');
            }
        }
    }
?>