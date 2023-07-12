<!DOCTYPE html>
<html>
<head>
    <title>Détails de l'activité sportive</title>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            margin-bottom: 20px;
        }

        .details {
            margin-bottom: 20px;
        }

        .details strong {
            display: inline-block;
            width: 100px;
        }
    </style>
</head>
<body>
    <h1>Détails de l'activité sportive</h1>

    <div class="details">
        <strong>Nom :</strong> <?php echo $activity['name']; ?>
    </div>

    <div class="details">
        <strong>Emplacement :</strong> <?php echo $activity['location']; ?>
    </div>

    <div class="details">
        <strong>Date :</strong> <?php echo $activity['date']; ?>
    </div>

    <!-- Autres détails à afficher -->

    <a href="<?php echo('activites/liste'); ?>">Retour à la liste des activités</a>

    <script src="assets/js/scripts.js"></script>
</body>
</html>
