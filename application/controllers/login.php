<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since		 this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// public function index()
	// {
	// 	$this->load->view('welcome_message');
	// }
	public function index()
		{
    		$this->load->view('login_view');
		}

	// public function Manahoana($pseudo=''){
	// 	echo 'Manahoana tompko o : ' . $pseudo . '<br/>';
	// }		
	// public function Manger($plat ='', $boisson = ''){
	// 	echo 'Voici votre menu : <br/>';
	// 	echo $plat . '<br/>';
	// 	echo $boisson . '<br/>';
	// 	echo 'Bon appetit !';
	// }
	public function process_login()
	{
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    // Valider les informations de connexion avec la base de données
    // ...

    // Rediriger l'utilisateur vers une page appropriée après la connexion réussie
    // ...
	}

}