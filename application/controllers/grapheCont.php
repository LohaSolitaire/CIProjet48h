<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class grapheCont extends CI_Controller {

    private function getStatistics()
    {
        // Vous devez implémenter cette fonction pour récupérer vos propres données statistiques
        // et les retourner sous forme de tableau associatif avec les clés 'month' et 'sales'.
        // Par exemple:
        return array(
            array('month' => 'January', 'sales' => 100),
            array('month' => 'February', 'sales' => 150),
            array('month' => 'March', 'sales' => 200),
            // ...
        );
    }

    public function index()
    {
        // Charger les vues et les bibliothèques nécessaires
        $this->load->view('graphe');
        $this->load->library('googlecharts');
        
        // Récupérer les données statistiques de votre modèle ou de votre source de données
        $stats = $this->getStatistics();

        // Construire les données pour le graphique
        $chartData = array(
            ['month', 'sales'] // En-têtes du graphique
        );

        foreach ($stats as $stat) {
            $chartData[] = array(
                $stat['month'], // Mois
                $stat['sales']  // Valeur statistique (ventes, par exemple)
            );
        }

        // Définir les options du graphique
        $chartOptions = array(
            'title' => 'Monthly Sales', // Titre du graphique
            'width' => 600,             // Largeur du graphique en pixels
            'height' => 400             // Hauteur du graphique en pixels
        );

        // Passer les données et les options au générateur de graphiques de Google
        $this->googlecharts->load('line', '1', array('packages' => 'corechart'));
        $this->googlecharts->DataTable($chartData);
        $this->googlecharts->options($chartOptions);

        // Rendre le graphique et l'afficher dans la vue
        $data['chart'] = $this->googlecharts->lineChart('sales_chart');
        $this->load->view('graph', $data);
    }

    // Exemple de fonction pour récupérer les statistiques à partir d'une source de données 
}