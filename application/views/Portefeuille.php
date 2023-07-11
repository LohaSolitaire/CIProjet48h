<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Porte-feuille</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	<script src="https://kit.fontawesome.com/5c05d27ff7.js" crossorigin="anonymous"></script>
</head>
<body>
	<!-- Content -->
	<div class="container my-container">
		<h1>Bienvenue sur votre porte-feuille</h1>
		<div class="row">
			<div class="col-3">
				<div class="card">
					<div class="card-body">
						<h2 class="card-title">Solde</h2>
						<h3 class="card-subtitle mb-2 text-body-secondary">450000 Ar</h3>
					</div> 
				</div>
			</div>
			<div class="col-9">
				<form method="post" action="<?php echo base_url('portefeuille/chargerSolde/')?>">
				<div class="card">
					<div class="card-body">
						<h2 class="card-title">Rechargez votre compte</h2>
						<form>
							<div class="input-group mb-3">
								<input type="text" name="code_recharge" class="form-control" placeholder="Veuillez saisir le code..." aria-label="Recipient's username" aria-describedby="button-addon2">
								<button class="btn btn-outline-secondary" type="submit">Valider</button>
							</div>
						</form>
					</div>
				</div>
				</form>
				<div class="card">
					<div class="card-body">
						<h2 class="card-title">Historique</h2>
						<h6 class="card-subtitle mb-2 text-body-secondary">Vos transactions faites :</h6>
						<table class="table">
							<thead>
								<tr>
									<th scope="col">Date</th>
									<th scope="col">Type</th>
									<th scope="col">Montant</th>
									<th scope="col">Détails</th>
								</tr>
							</thead>
							<tbody class="table-group-divider">
								<tr>
									<th scope="row">10/10/2023</th>
									<td>Dépôt</td>
									<td>10000</td>
									<td>-</td>
								</tr>
								<tr>
									<th scope="row">23/10/2023</th>
									<td>Dépôt</td>
									<td>50000</td>
									<td>-</td>
								</tr>
								<tr>
									<th scope="row">02/11/2023</th>
									<td>Achat</td>
									<td>50000</td>
									<td>Alimentation régime</td>
								</tr>
								<tr>
									<th scope="row">30/11/2023</th>
									<td>Dépôt</td>
									<td>200000</td>
									<td>-</td>
								</tr>
								<tr>
									<th scope="row">31/11/2023</th>
									<td>Achat</td>
									<td>50000</td>
									<td>Alimentation régime</td>
								</tr>
								<tr>
									<th scope="row">05/12/2023</th>
									<td>Dépôt</td>
									<td>20000</td>
									<td>-</td>
								</tr>
								<tr>
									<th scope="row">12/12/2023</th>
									<td>Dépôt</td>
									<td>50000</td>
									<td>-</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

    <script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>