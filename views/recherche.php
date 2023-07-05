<?php include '../controllers/recherche.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Réchercher Candidat</title>
</head>
<body>
    <div class="container mt-3 card">
        <h2>Réchercher les candidats dans une filière</h2>
        <div class="form-group row my-2 mt-3">
            <div class="col-sm-10">
                <?php include './msg_error_success.php' ?>
            </div>
        </div>
        <form action="" method="post">
            <div class="form-group row my-2">
                <label class="col-sm-2 col-form-label col-form-label-lg">Dans la filière</label>
                <div class="col-sm-4">
                    <select class="form-control form-control-lg" name="filiere">
                        <option value="">Select filière</option>
                        <?php
                            require_once('../models/connexion.php'); 
                            $db = dbConnect();
                            $req = $db->query('SELECT * FROM filiere ');
                            $filires = $req;
                            foreach($filires as $filire): 
                        ?>
                        <option value="<?= $filire['codefil'] ?>"><?= $filire['nomfil'] ?></option>
                        <?php endforeach; ?> 
                    </select>
                </div>
            </div>
            <div class="form-group row my-2">
                <label class="col-sm-2 col-form-label col-form-label-lg">Envoyer</label>
                <div class="col-sm-2">
                    <input type="submit" name="ok" class="form-control form-control-lg btn btn-outline-primary fw-bold" value="OK">
                </div>
            </div>
        </form>
        
        <div class="form-group row my-4">
            <div class="panel-body">
                <h2>LISTE DES CANDIDATS</h2>
                <table class="table table-bordered">
                    <thead class="thead-light text-center">
                        <tr>
                            <th scope="col">NOM</th>
                            <th scope="col">PRENOM</th>
                            <th scope="col">SEXE</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach($candidats as $candidat): ?>

                            <tr>
                                <td><?= $candidat['nom'] ?></td>
                                <td><?= $candidat['prenom'] ?></td>
                                <td><?= $candidat['sexe'] ?></td>
                            </tr>
                            
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/scripts.js"></script>
</body>
</html>
      
</body>
</html>