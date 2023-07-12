<?php 
    $this->load->view('template/header_admin');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .category {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
            position: relative;
        }

        .category h2 {
            margin: 0;
            font-size: 18px;
            color: #333;
        }

        .category p {
            margin: 0;
            color: #666;
        }

        .category-buttons {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .category-buttons button {
            margin-left: 5px;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            color: #fff;
            cursor: pointer;
        }

        .category-buttons .btn-modify {
            background-color: #4CAF50; /* Vert */
        }

        .category-buttons .btn-delete {
            background-color: #FF0000; /* Rouge */
        }
    </style>
</head>
<body>
    <h1>Détails Regime et ses Categorie</h1>

    <div class="category">
        <div class="category-buttons">
            <button class="btn-modify">Modifier</button>
            <button class="btn-delete">Supprimer</button>
        </div>
        <h2>Aliment ajoutée</h2>
        <h4>La Regime ajoutée est:</h4>
        <p>Regime num 1 : <?php echo $nomRegime1; ?></p>
        <p>Regime num 2 : <?php echo $nomRegime2; ?></p>
        <p>Regime num 3 : <?php echo $nomRegime3; ?></p>
        
        <h4>La description de la catégorie est : </h4>
        <p>Categorie num 1 : <?php echo $categorie1; ?>
       <p>Categorie num 2 :<?php echo $categorie2; ?></p>
       <p>Categorie num 3 :<?php echo $categorie3; ?></p> 
    </p>
    </div>

    <div class="category">
        <div class="category-buttons">
            <button class="btn-modify">Modifier</button>
            <button class="btn-delete">Supprimer</button>
        </div>
        <h2>catégorie aliment ajoutée</h2>
        <h4>La duree ajoutée est:</h4>
        <p><?php echo $dureeRegime1; ?></p>
        <p><?php echo $dureeRegime2; ?></p>
        <p><?php echo $dureeRegime3; ?></p>

        <h4>La description de la sous-catégorie est : </h4>
        <p><?php echo $prixRegime1; ?>
        <?php echo $prixRegime2; ?>
        <?php echo $prixRegime3; ?>
        </p>
    </div>
    <script>
        // Vous pouvez ajouter du code JavaScript ici si nécessaire
    </script>
</body>
</html>
