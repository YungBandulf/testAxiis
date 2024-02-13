<?php
include 'config.php';
var_dump($_POST);
if (
    !empty($_POST['date_devis'])
    && !empty($_POST['date_effet'])
    && !empty($_POST['categorie'])
    && !empty($_POST['montant'])
) {

$sql = "INSERT INTO devis(date_devis, date_effet, categorie, montant) VALUES(?, ?, ?, ?)";

    $req = $mysqli->prepare($sql);

    $req->execute(array(
        $_POST['date_devis'],
        $_POST['date_effet'],
        $_POST['categorie'],
        $_POST['montant'],
    ));

    if ($req->affected_rows) {
        echo "Devis ajouté";
    } else{
        echo "Erreur survenue";
    }

} else {
    echo "information manquante";
}