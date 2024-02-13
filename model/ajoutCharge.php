<?php
include 'config.php';
var_dump($_POST);
if (
    !empty($_POST['date_charge'])
    && !empty($_POST['date_effet'])
    && !empty($_POST['categoriePrincipale'])
    && !empty($_POST['sousCategorie'])
    && !empty($_POST['montant'])
) {

$sql = "INSERT INTO actif(date_charge, date_effet, categoriePrincipale, sousCategorie, montant) VALUES(?, ?, ?, ?, ?)";

    $req = $mysqli->prepare($sql);

    $req->execute(array(
        $_POST['date_charge'],
        $_POST['date_effet'],
        $_POST['categoriePrincipale'],
        $_POST['sousCategorie'],
        $_POST['montant'],
    ));

    if ($req->affected_rows) {
        echo "Charge ajoutée";
    } else{
        echo "Erreur survenue";
    }

} else {
    echo "information manquante";
}