<?php
include 'config.php';
var_dump($_POST);
if (
    !empty($_POST['date_produit'])
    && !empty($_POST['date_effet'])
    && !empty($_POST['categorie'])
    && !empty($_POST['montant'])
) {

$sql = "INSERT INTO produit(date_produit, date_effet, categorie, montant) VALUES(?, ?, ?, ?)";

    $req = $mysqli->prepare($sql);

    $req->execute(array(
        $_POST['date_produit'],
        $_POST['date_effet'],
        $_POST['categorie'],
        $_POST['montant'],
    ));

    if ($req->affected_rows) {
        echo "Produit ajouté";
    } else{
        echo "Erreur survenue";
    }

} else {
    echo "information manquante";
}