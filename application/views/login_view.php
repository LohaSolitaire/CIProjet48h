<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page de connexion</title>
    <link rel="stylesheet" href="<?php echo ('assets/css/login.css'); ?>">
    <script type="text/javascript" defer src="<?php echo ('assets/js/script.js'); ?>"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-xNvgHZRRZNJdtP4zeaw3SMH6EycsVnHNClL5FvXwT0IC3VZOf0DU5Zs1Xl0ZBvEP" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
        body {
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>

<body>
<div class="container">
        <div class="img">
            <img src="assets/img/shopping.svg">
        </div>
        <div class="login-content">
        <form action="<?php echo ($uri ='login/process_login');?>" method="post">
                <img src="assets/img/avatar.svg">
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Adresse e-mail ou numero de tel</h5>
                        <input id="email" type="text" class="input" name="email" required>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock "></i>
                    </div>
                    <div class="div">
                        <h5>Mot de passe</h5>
                        <input id="password" type="password" class="input" name="password" required>
                    </div>
                </div>
                </br>
                <input type="submit" class="btn" value="Se Connecter">
            </form>
        </div>
    </div>
</body>
</html>
