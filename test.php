<!DOCTYPE html>
<html>
<head>
  <title>Ma Page</title>
  <style>
    /* Styles CSS pour la structure de la page */
    body {
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    header {
      background-color: #f1f1f1;
      padding: 20px;
      text-align: center;
    }
    
    .container {
      display: flex;
      flex-grow: 1;
      margin-top: -20px; /* Ajuster la marge négative */
    }

    .sidebar {
      width: 250px;
      background-color: #f1f1f1;
      padding: 20px;
      height: 100vh; /* Ajuster la hauteur à 100% */
    }

    .content {
      flex-grow: 1;
      /* padding: 20px; */
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="sidebar">
      <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="#">Profil</a></li>
        <li><a href="#">Paramètres</a></li>
        <li><a href="#">Déconnexion</a></li>
      </ul>
    </div>
    <div class="content">
      <header>
        <h1>Mon en-tête</h1>
      </header>
      <h2>Contenu</h2>
      <p>Ceci est le contenu de ma page.</p>
    </div>
  </div>
</body>
</html>


