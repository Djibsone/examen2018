<?php
require_once('../models/connexion.php');

if (isset($_POST['enregistrer'])) {
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['filiere'])) {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $datnais = htmlspecialchars($_POST['datnais']);
        $ville = htmlspecialchars($_POST['ville']);
        $sexe = htmlspecialchars($_POST['sexe']);
        $filiere = htmlspecialchars($_POST['filiere']);

        if ($datnais && $ville && $sexe) {
            $stmt = addCandidat($nom, $prenom, $datnais, $ville, $sexe, $filiere);
            ($stmt) ? header('Location: ../?s=' .base64_encode('Enregistrment effectué avec succès')) : header('Location: ../?e=' .base64_encode('Erreur d\'enregistrement'));
        } else {
            $datnais = null;
            $ville = null;
            $sexe = null;

            $stmt = addCandidat($nom, $prenom, $datnais, $ville, $sexe, $filiere);
            ($stmt) ? header('Location: ../?s=' .base64_encode('Enregistrment effectué avec succès')) : header('Location: ../?e=' .base64_encode('Erreur d\'enregistrement'));
        }
       
    } else {
        header('Location: ../?e=' .base64_encode('Nom, prénom et filière sont obligatores'));
    }

    //header('Location: ../?s=' . base64_encode($suc) . '&e=' . base64_encode($err));
    //header('Location: ../?e=' . base64_encode($err));

}