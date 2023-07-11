<?php
class Regime_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    // Insérer un nouveau régime
    public function insertRegime($data) {
        return $this->db->insert('regime', $data);
    }

    // Récupérer tous les régimes d'un utilisateur
    public function getRegimesByUtilisateur($idUtilisateur) {
        $this->db->where('idUtilisateur', $idUtilisateur);
        $query = $this->db->get('regime');
        return $query->result();
    }

    // Récupérer un régime par son ID
    public function getRegimeById($idRegime) {
        $this->db->where('idRegime', $idRegime);
        $query = $this->db->get('regime');
        return $query->row();
    }

    // Mettre à jour un régime
    public function updateRegime($idRegime, $data) {
        $this->db->where('idRegime', $idRegime);
        return $this->db->update('regime', $data);
    }

    // Supprimer un régime
    public function deleteRegime($idRegime) {
        $this->db->where('idRegime', $idRegime);
        return $this->db->delete('regime');
    }

    public function calculerIMC($poids, $taille) {
        // Convertir la taille en mètres (de cm à m)
        $taille = $taille / 100;
    
        // Calculer l'IMC
        $imc = $poids / ($taille * $taille);
    
        // Arrondir l'IMC à deux décimales
        $imc = round($imc, 2);
    
        return $imc;
    }    
}
?>