<?php
include 'config.php';
var_dump($_POST);
if (
    !empty($_POST['date_capitauxPropres'])
    && !empty($_POST['date_effet'])
    && !empty($_POST['categorie'])
    && !empty($_POST['montant'])
) {

$sql = "INSERT INTO devis(date_capitauxPropres, date_effet, categorie, montant) VALUES(?, ?, ?, ?)";

    $req = $mysqli->prepare($sql);

    $req->execute(array(
        $_POST['date_capitauxPropres'],
        $_POST['date_effet'],
        $_POST['categorie'],
        $_POST['montant'],
    ));

    if ($req->affected_rows) {
        echo "Capital propre ajouté";
    } else{
        echo "Erreur survenue";
    }

} else {
    echo "information manquante";
}