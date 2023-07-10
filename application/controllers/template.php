<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class template extends CI_Controller {
	public function index()
		{
	$this->load->view("template/header_admin");
	$this->load->view("template_view");
	$this->load->view("template/footer_admin");
	// $this->load->view($contents);
		}
}   
?>