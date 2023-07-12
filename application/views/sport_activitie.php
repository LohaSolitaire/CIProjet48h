
    <title>Liste des activités sportives</title>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .action-buttons {
            display: flex;
            align-items: center;
        }

        .action-buttons label {
            margin-right: 10px;
        }

        .action-buttons button {
            padding: 5px 10px;
            margin-right: 5px;
        }

        .action-buttons button.edit {
            background-color: green;
            color: white;
        }

    </style>

    <h1>Liste des activités sportives</h1>
    <table>
        <tr>
            <th>Nom</th>
            <th>Emplacement</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($activities as $activity): ?>
            <tr>
                <td><?php echo $activity['name']; ?></td>
                <td><?php echo $activity['location']; ?></td>
                <td><?php echo $activity['date']; ?></td>
                <td class="action-buttons">
                    <form method="post" action="<?php echo ('detaille_sport/details'); ?>">
                        <input type="checkbox" id="checkbox_oui" name="checkbox_oui" value="oui">
                        <label for="checkbox_oui">Oui</label>
                        <input type="checkbox" id="checkbox_non" name="checkbox_non" value="non">
                        <label for="checkbox_non">Non</label>
                        <button class="edit">Choisir</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    </section>
  </main>
    <script src="assets/js/scripts.js"></script>
    <script>
        // Ajoutez ici votre code JavaScript pour gérer les clics sur les boutons
        // et effectuer les actions correspondantes (modification ou suppression).
    </script>