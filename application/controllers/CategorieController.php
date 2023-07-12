<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategorieController extends CI_Controller {

    public function index()
    {
        $this->load->view('template/header_admin');
        $this->load->view('template/footer_admin');
        $this->load->view('Aliment/ajouter_categorie');
    }

    public function __construct()
    {
        parent::__construct();
        // Charger le modèle de la catégorie
        $this->load->model('Categorie_model');
    }

    public function insert()
    {
        // Vérifier si le formulaire a été soumis
        if ($this->input->post()) {
            // Récupérer les données du formulaire
            $nomRegime1 = $this->input->post('nom_regime');
            $nomRegime2 = $this->input->post('nom_regime');
            $nomRegime3 = $this->input->post('nom_regime');
            $categorie1 = $this->input->post('categorie');
            $categorie2 = $this->input->post('categorie');
            $categorie3 = $this->input->post('categorie');
            $dureeRegime1 = $this->input->post('dureeRegime');
            $dureeRegime2 = $this->input->post('dureeRegime');
            $dureeRegime3 = $this->input->post('dureeRegime');
            $prixRegime1 = $this->input->post('prixRegime');
            $prixRegime2 = $this->input->post('prixRegime');
            $prixRegime3 = $this->input->post('prixRegime');
            // Données de la catégorie principale
            // $categorieData = array(
            //     'nom_regime' => $nomRegime1,

              
            // );
            // // Insérer la catégorie principale dans la base de données
            // $categorieId = $this->Categorie_model->insertCategorie($categorieData);
            // // Données de la sous-catégorie
            // $sousCategorieData = array(
            //     'id_categorie' => $categorieId,
            //     'nom_sous_categorie' => $dureeRegime,
            //     'idUtilisateur' => $prixRegime
            // );
            // Insérer la sous-catégorie dans la base de données
            // $this->Categorie_model->insertSousCategorie($sousCategorieData);

            // Rediriger vers une page de confirmation ou une autre action
            redirect('CategorieController/success');
        } else {
            // Afficher la vue du formulaire d'ajout de catégorie
            $this->load->view('Aliment/ajouter_categorie');
        }
    }
    public function listeCategorie()
    {
        $data['nomRegime1'] = $this->input->post('nom_regime');
        $data['nomRegime2'] = $this->input->post('nom_regime');
        $data['nomRegime3'] = $this->input->post('nom_regime');
        $data['categorie1'] = $this->input->post('categorie');
        $data['categorie2'] = $this->input->post('categorie');
        $data['categorie3'] = $this->input->post('categorie');
        $data['dureeRegime1'] = $this->input->post('dureeRegime');
        $data['dureeRegime2'] = $this->input->post('dureeRegime');
        $data['dureeRegime3'] = $this->input->post('dureeRegime');
        $data['prixRegime1'] = $this->input->post('prixRegime');
        $data['prixRegime2'] = $this->input->post('prixRegime');
        $data['prixRegime3'] = $this->input->post('prixRegime');

        $this->load->view("template/header_admin");
        $this->load->view('Aliment/liste_categorie', $data);
        $this->load->view("template/footer_admin");
    }
   
    public function success()
    {
        // Afficher une page de confirmation ou une autre action après l'insertion réussie
        $this->load->view('insertion_reussie');
    }
}