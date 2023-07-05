<div class="container-fluide m-3 mt-2">
    <h2>Vos coordonnées</h2>
    <div class="form-group row my-2 mt-4">
      <div class="col-sm-10">
        <?php include './msg_error_success.php' ?>
      </div>
    </div>
    <form class="form" action="./controllers/saisie.php" method="post">
        <div class="form-group row my-2 mt-4">
          <label class="col-sm-2 col-form-label col-form-label-lg">Nom</label>
          <div class="col-sm-6">
            <input type="text" class="form-control form-control-lg" name="nom">
          </div>
        </div>
        <div class="form-group row my-2">
            <label class="col-sm-2 col-form-label col-form-label-lg">Prénom</label>
            <div class="col-sm-6">
              <input type="text" class="form-control form-control-lg" name="prenom">
            </div>
          </div>
          <div class="form-group row my-2">
            <label class="col-sm-2 col-form-label col-form-label-lg">Date de naissance</label>
            <div class="col-sm-6">
              <input type="date" class="form-control form-control-lg" name="datnais">
            </div>
          </div>
          <div class="form-group row my-2">
            <label class="col-sm-2 col-form-label col-form-label-lg">Ville</label>
            <div class="col-sm-6">
              <input type="text" class="form-control form-control-lg" name="ville">
            </div>
          </div>
          <div class="form-group row my-2">
            <label class="col-sm-2 col-form-label col-form-label-lg">Sexe</label>
            <div class="col-sm-6">
              <input type="text" class="form-control form-control-lg" name="sexe">
            </div>
          </div>
          <div class="form-group row my-2">
            <label class="col-sm-2 col-form-label col-form-label-lg">Filière</label>
            <div class="col-sm-2">
                <select class="form-control form-control-lg" name="filiere">
                    <option value="">Select filière</option>
                  <?php
                    require_once('./models/connexion.php'); 
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
          <div class="form-group row my-4">
            <input type="reset" class="col-sm-2 col-form-label col-form-label btn btn-outline-dark fw-bold" value="Effacer">
            <div class="col-sm-4">
              <input type="submit" name="enregistrer" class="form-control form-control-lg btn btn-outline-primary fw-bold" value="Enregistrer">
            </div>
          </div>
      </form>
</div>
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/js/scripts.js"></script>
