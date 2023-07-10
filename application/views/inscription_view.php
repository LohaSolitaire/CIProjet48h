

<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Inscription </title>
    <link rel="stylesheet" href="<?php echo ('assets/css/inscription.css'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h2>Inscription</h2>

        <?php echo validation_errors(); ?>

        <?php echo form_open('inscription/enregistrer'); ?>

<div class="container">
        <div class="title">Inscription</div>
        <div class="content">
            <form action="#">
                <div class="user-details">
                    <div class="input-box">
                    <input  id="Nom" type="text" name="nom" value="<?php echo set_value('nom'); ?>" placeholder="Nom de famille (*) " required>
                    </div>
                    <div class="input-box">
                        <input id="Prenom" type="text" name="prenom"<?php echo set_value('prenom'); ?> placeholder="Prenom (*)" required>
                    </div>
                    <div class="input-box-1">
                    <input type="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email (*) " required id="email">
                    </div>
                    <div class="input-box-1">
                        <input id="date" type="date" name="date" value="<?php echo set_value('date'); ?>" placeholder="Date de Naissance (*) " required>
                    </div>
                    <!-- <div class="input-box-1">
                        <input id="genre" type="t" name="genre" value="" placeholder="genre (*) " required>
                    </div> -->
                    <div class="input-box-1">
                        <input id="taille" type="number" name="taille" value="<?php echo set_value('taille'); ?>" placeholder="taille (*) " required>
                    </div>
                    <div class="input-box-1">
                        <input id="poids" type="number" name="poids" value="<?php echo set_value('poids'); ?>" placeholder="poids (*) " required>
                    </div>
                    <div class="gender-details">
                    <input type="radio" name="gender" id="dot-1">
                    <input type="radio" name="gender" id="dot-2">
                    <input type="radio" name="gender" id="dot-3">
                    <span class="gender-title">Genre</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Masculin</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Feminin</span>
                        </label>
                    </div>
                    </div>
                    </div>
                    <p class="condition">
                        <input type="checkbox" required> Je suis majeur - “ En cochant sur Inscription, vous acceptez nos Conditions et indiquez que vous avez lu notre Politique d’utilisation des données , y compris notre Utilisation des cookies .”
                    </p>
                    <div class="button">
                        <input type="submit" value="Inscription">
                        <input id="annuler" type="submit" value="Annuler">
                    </div>
            </form>
        </div>
    </div>
    <?php echo form_close(); ?>
</body>
</html>