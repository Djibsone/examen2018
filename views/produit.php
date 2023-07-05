<?php require '../controller/getCategories.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produit</title>
    <style>
        #err, #addOk{
            display: none;
        }    
    </style>
    <link href="../bootstrap.css" rel="stylesheet" >
</head>
<body>
<!-- header -->
<?php include '../views/header.php' ?>

<!-- page content -->
<div class="container-fluid">
    <form action="../controller/produitUpdate.php" method="POST">
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                  <label class="form-label">Référence</label>
                  <input type="text" class="form-control" name="refPd" id="refPd">
              </div>
              <div class="mb-3">
                  <label class="form-label">Libeller</label>
                  <input type="text" class="form-control" name="libellePd" id="libellePd">
              </div>
              <div class="mb-3">
                  <label class="form-label">Prix de vente</label>
                  <input type="text" class="form-control" name="pvPd" id="pvPd">
              </div>
              <div class="mb-3">
                  <label class="form-label">Description</label>
                  <input type="text" class="form-control" name="descriptPd" id="descriptPd">
              </div>
              <div class="mb-3">
                  <label class="form-label">Catégorie</label>
                    <select name="codePd" id="codePd" class="form-control">
                      <option value="">Select category</option>
                        <?php
                          foreach($cat as $row) { ?>
                          <option value="<?= $row['code'] ?>"><?= $row['libelle'] ?></option>
                        <?php  } 
                      ?>
                    </select>
              </div>
              </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Sauvegarder changements</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    <br>
    <div class="row mt-2">
        <div class="col-4">
            <div class="container">
                <h4 class="mb-3">Ajouter un produit</h4>
                <form id="form_add">
                    <div id="err" class="alert alert-danger alert-dismissible fade show" role="alert">
                        Veuillez renseigner tous les champs
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Référence</label>
                        <input type="text" class="form-control" name="refP" id="refP" onkeyup="this.value=this.value.toUpperCase()">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Libeller</label>
                        <input type="text" class="form-control" name="libelleP" id="libelleP">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Prix de vente</label>
                        <input type="text" class="form-control" name="pvP" id="pvP">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control" name="descriptP" id="descriptP">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Catégorie</label>
                          <select name="codeP" id="codeP" class="form-control">
                            <option value="">Select category</option>
                              <?php
                                foreach($categories as $row) { ?>
                                <option value="<?= $row['code'] ?>"><?= $row['libelle'] ?></option>
                              <?php  } 
                            ?>
                          </select>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary w-100" id="produit">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-8 border-start">
            <table class="table" id="tableP">
                <thead>
                    <th>Référence</th>
                    <th>Libeller</th>
                    <th>Prix de vente</th>
                    <th>Description</th>
                    <th>Code</th>
                    <th>Actions</th>
                </thead>

                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>
    
<script type="text/javascript" src="../jquery.min.js"></script>
<script type="text/javascript" src="../bootstrap.min.js"></script>
<script  type="text/javascript" src="../app.js"></script>
</body>
</html>