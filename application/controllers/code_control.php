<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class code_control extends CI_Controller {

  public function index() {
    $this->load->view("template/header_admin");
    $this->load->view('credit_code');
    $this->load->view("template/footer_admin");
  }
}