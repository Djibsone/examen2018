<!DOCTYPE html>
<html>
<head>
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Bienvenu à l'accueil</title>
  
</head>
<body>
  <div class="containe">
    <div class="sidebar">
      <?php include './views/menu.php' ?>
    </div>
    <div class="content">
      <header>
        <?php include './views/info.php' ?>
      </header>
      <?php include './views/saisie.php' ?>
    </div>
  </div>

  <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/scripts.js"></script>
</body>
</html>