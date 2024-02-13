<?php
include 'config.php';
var_dump($_POST);
if (
    !empty($_POST['date_facture'])
    && !empty($_POST['date_effet'])
    && !empty($_POST['categorie'])
    && !empty($_POST['montant'])
) {

$sql = "INSERT INTO facture(date_facture, date_effet, categorie, montant) VALUES(?, ?, ?, ?)";

    $req = $mysqli->prepare($sql);

    $req->execute(array(
        $_POST['date_facture'],
        $_POST['date_effet'],
        $_POST['categorie'],
        $_POST['montant'],
    ));

    if ($req->affected_rows) {
        echo "Facture ajouté";
    } else{
        echo "Erreur survenue";
    }

} else {
    echo "information manquante";
}