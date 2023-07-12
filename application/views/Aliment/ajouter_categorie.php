<?php 
    $this->load->view('template/header_admin');
?>

    <style>
        /* Styles pour le conteneur */
        .container {
            max-width: 600px;
            height: 900px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Styles pour le titre */
        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        /* Styles pour le formulaire */
        .user-details {
            margin-bottom: 20px;
        }

        .input-box {
            margin-bottom: 10px;
        }

        .input-box input {
            width: 100%;
            padding: 5px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }

        /* Styles pour les boutons */
        .button {
            text-align: center;
        }

        .button input[type="submit"] {
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 3px;
           
        }

        .button input[type="submit"]:hover {
            background-color: #45a049;
            margin-right: 300px;
        }
    </style>

<div class="container">
    <div class="title">Ajouter des Regime</div>
    <div class="content">
        <form action="<?php echo('listeCategorie'); ?>" method="post">
            <div class="user-details">
                <div class="input-box">
                    <label for="Nom1">Nom Régime n^1:</label>
                    <input id="Nom1" type="text" name="nom_regime" required>
                </div>
                <div class="input-box">
                    <label for="Nom2">Nom Régime n^2:</label>
                    <input id="Nom2" type="text" name="nom_regime" required>
                </div>
                <div class="input-box">
                    <label for="Nom3">Nom Régime n^3:</label>
                    <input id="Nom3" type="text" name="nom_regime" required>
                </div>
                <div class="input-box">
                    <label for="categorie">Catégorie Régime n^1:</label>
                    <input id="categorie1" type="text" name="categorie" required>
                </div>
                <div class="input-box">
                    <label for="categorie">Catégorie Régime n^2:</label>
                    <input id="categorie2" type="text" name="categorie" required>
                </div>
                <div class="input-box">
                    <label for="categorie">Catégorie Régime n^3:</label>
                    <input id="categorie3" type="text" name="categorie" required>
                </div>
                <div class="input-box-1">
                    <label for="dureeRegime">Durée de mangeable n^1:</label>
                    <input type="text" name="dureeRegime" required id="dureeRegime1">
                </div>
    </br>
                <div class="input-box-1">
                    <label for="dureeRegime">Durée de mangeable n^2:</label>
                    <input type="text" name="dureeRegime" required id="dureeRegime2">
                </div>
                </br>
                <div class="input-box-1">
                    <label for="dureeRegime">Durée de mangeable n^3:</label>
                    <input id="dureeRegime3" type="text" name="dureeRegime" required >
                </div>
                </br>
                <div class="input-box-1">
                    <label for="prixRegime">Prix du régime n^1:</label>
                    <input id="prixRegime1" type="number" name="prixRegime" required>
                </div>
                </br>
                <div class="input-box-1">
                    <label for="prixRegime">Prix du régime n^2:</label>
                    <input id="prixRegime2" type="number" name="prixRegime" required>
                </div>
                </br>
                <div class="input-box-1">
                    <label for="prixRegime">Prix du régime n^3:</label>
                    <input id="prixRegime3" type="number" name="prixRegime" required>
                </div>
                </br>
            </div>
            <div class="button">
                <input type="submit" value="Valider">
            </div>
        </form> 
    </div>
</div>
<br>
<br>
<?php 
    $this->load->view('template/footer_admin');
?>