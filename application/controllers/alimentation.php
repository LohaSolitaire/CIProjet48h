<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class alimentation extends CI_Controller {
     public function __construct(){
		parent::__construct();
        $this->load->model('Model_liste_alimentation');
	}

    public function getListAliment(){
		$resultats = $this->Model_liste_alimentation->getList();
        $result = $this->Model_liste_alimentation->getNbrUser();
        $results = $this->Model_liste_alimentation->getTotalAchat();
		$data['resultats'] = $resultats;
        $data['results'] = $result;
        $data['prix'] = $results;
        $this->load->view('Aliment/Liste_aliment',$data);
        
    }

    public function getTotalUser(){
		$resultats = $this->Model_liste_alimentation->getNbrUser();
		$data['$results'] = $resultats;
        
		$this->load->view('Aliment/Liste_aliment',$data);
    }

    // public function getStat(){
    //     $this->load->view('Vente/stat');

    // }

    public function getInsert(){
        $this->load->view('Aliment/Ajouter_aliment');
    }
    
    public function getValidePrix(){
        $resultats = $this->Model_liste_alimentation->getList();
        $result = $this->Model_liste_alimentation->getNbrUser();
        $results = $this->Model_liste_alimentation->getTotalAchat();
		$data['resultats'] = $resultats;
        $data['results'] = $result;
        $data['prix'] = $results;
        $this->Model_liste_alimentation->getValider();
		$this->load->view('Aliment/Liste_aliment',$data);
    }
}