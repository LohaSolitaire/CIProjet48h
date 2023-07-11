<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Profil</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	<script src="https://kit.fontawesome.com/5c05d27ff7.js" crossorigin="anonymous"></script>
</head>
<body>
	<!-- Content -->
	<div class="container my-container">
		<h1>Bienvenue sur votre profil</h1>
		<form method="post" action="<?php echo base_url();?>profil/valider_informations">
		<div class="card" style="width: 60%;">
			<div class="card-body">
				<h2 class="card-title">Régime</h2>
				<h6 class="card-subtitle mb-2 text-body-secondary">Vous avez choisi :</h6>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="idObjectif" id="inlineRadio1" value=1 
					<?php 
						$this->load->library('session');
						if($this->session->userdata('idObjectif') == 1) { echo "checked"; }	
					?>>
					<label class="form-check-label" for="inlineRadio1">Augmenter votre poids</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="idObjectif" id="inlineRadio2" value=2
					<?php 
						$this->load->library('session');
						if($this->session->userdata('idObjectif') == 2) { echo "checked"; }
					?>>
					<label class="form-check-label" for="inlineRadio2">Réduire votre poids</label>
				</div>
			</div>
		</div>

		<div class="card" style="width: 60%;">
			<div class="card-body">
				<h2 class="card-title">Vos informations</h2>
				<h6 class="card-subtitle mb-2 text-body-secondary">Modifiez ou complétez vos informations :</h6>
				<div class="input-group mb-3">
					<span class="input-group-text" id="inputGroup-sizing-default">Nom</span>
					<input type="text" name="nom" class="form-control" required value="<?php $this->load->library('session'); if($this->session->userdata('nom')) { echo $this->session->userdata('nom'); }?>">
				</div>
				<div class="input-group mb-3">
					<span class="input-group-text" id="inputGroup-sizing-default">Prénom(s)</span>
					<input type="text" name="prenom" class="form-control" required value="<?php $this->load->library('session'); if($this->session->userdata('prenom')) { echo $this->session->userdata('prenom'); }?>">
				</div>
				<div class="input-group mb-3">
					<span class="input-group-text" id="inputGroup-sizing-default">Email</span>
					<input type="email" name="email" class="form-control" required value="<?php $this->load->library('session'); if($this->session->userdata('email')) { echo $this->session->userdata('email'); }?>">
				</div>
				<div class="input-group mb-3">
					<span class="input-group-text" id="inputGroup-sizing-default">Mot de passe</span>
					<input type="password" name="mdp" class="form-control" required value="<?php $this->load->library('session'); if($this->session->userdata('mdpHash')) { echo $this->session->userdata('mdpHash'); }?>" disabled>
				</div>
				<div class="input-group mb-3">
					<span class="input-group-text" id="inputGroup-sizing-default">Date de naissance</span>
					<input type="date" name="date_naissance" class="form-control" required value="<?php $this->load->library('session'); if($this->session->userdata('dateNaissance')) { echo $this->session->userdata('dateNaissance'); }?>">
				</div>
				<div class="input-group mb-3">
					<span class="input-group-text" id="inputGroup-sizing-default">Taille(cm)</span>
					<input type="number" name="taille" class="form-control" value="<?php $this->load->library('session'); if($this->session->userdata('taille')) { echo $this->session->userdata('taille'); }?>">
				</div>
				<div class="input-group mb-3">
					<span class="input-group-text" id="inputGroup-sizing-default">Poids(kg)</span>
					<input type="number" name="poids" class="form-control" value="<?php $this->load->library('session'); if($this->session->userdata('poids')) { echo $this->session->userdata('poids'); }?>">
				</div>
				<button type="submit" class="btn btn-warning">Enregistrer</button>
				<a href="index.php" class="card-link">Annuler</a>
			</div>
		</div>
		</form>
	</div>
	
	<script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>