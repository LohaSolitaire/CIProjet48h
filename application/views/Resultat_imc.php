<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
	<script src="https://kit.fontawesome.com/5c05d27ff7.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Content -->
    <div class="container my-container text-center">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Votre IMC est : <?php echo $imc; ?></h2>
                <a href="<?php echo base_url('regime/');?>"><button class="btn btn-primary">Retour</button></a>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>