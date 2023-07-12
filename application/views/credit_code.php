
<!DOCTYPE html>
<html>
<head>
  <title>Liste de codes de crédit</title>
  <style>
    /* Styles pour la liste des codes de crédit */
    #credit-codes {
      margin: 20px;
    }

    .credit-code {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 10px;
      padding: 10px;
      background-color: #f1f1f1;
      border-radius: 5px;
    }

    .credit-number {
      font-weight: bold;
    }

    .credit-index {
      margin-left: 10px;
      padding: 5px 10px;
      background-color: #4caf50;
      color: white;
      border-radius: 3px;
    }

    .credit-index::before {
      content: "#";
    }

    button {
      padding: 5px 10px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    button.validate {
      background-color: #4caf50;
      color: white;
    }

    button.delete {
      background-color: #f44336;
      color: white;
    }
  </style>
</head>
<body>
  <div id="credit-codes">
    <h2>Liste de codes de Code Porte Monaie</h2>
    <?php for ($i = 1; $i <= 15; $i++) { ?>
      <div class="credit-code">
        <span class="credit-number">1234ab566780 <?php echo $i; ?></span>
        <button class="validate">Valider</button>
        <button class="delete" onclick="deleteCreditCode(this)">Supprimer</button>
      </div>
    <?php } ?>
  </div>

  <script>
    function deleteCreditCode(button) {
      var parentDiv = button.parentNode;
      parentDiv.parentNode.removeChild(parentDiv);
    }
  </script>
</body>
</html>
