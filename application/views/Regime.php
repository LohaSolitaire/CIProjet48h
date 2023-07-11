<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<script src="https://kit.fontawesome.com/5c05d27ff7.js" crossorigin="anonymous"></script>
</head>

<body>
	<!-- Content -->
	<div class="container my-container text-center">
		<div class="card card-imc">
			<div class="card-body">
				<form method="post" action="<?php echo base_url('regime/valider_form_imc/');?>">
				<h2 class="card-title">Calcul IMC</h2>
				<form class="row row-cols-lg-auto g-3 align-items-center">
					<div class="col-12">
						<label class="visually-hidden" for="inlineFormSelectPref">Sexe</label>
						<select class="form-select" id="inlineFormSelectPref">
							<option value="0" selected>Homme</option>
							<option value="1">Femme</option>
						</select>
					</div>

					<div class="col-12">
						<div class="input-group">
							<input type="number" name="taille" class="form-control" id="inlineFormInputGroupUsername" placeholder="Taille(cm)">
						</div>
					</div>

					<div class="col-12">
						<div class="input-group">
							<input type="number" name="poids" class="form-control" id="inlineFormInputGroupUsername" placeholder="Poids(kg)">
						</div>
					</div>

					<div class="col-12">
						<div class="input-group">
							<input type="number" name="age" class="form-control" id="inlineFormInputGroupUsername" placeholder="Âge">
						</div>
					</div>

					<div class="col-12">
						<button type="submit" class="btn btn-primary">Calculer</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>