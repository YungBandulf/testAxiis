<?php

include 'config.php';

$query = "SELECT sous_categorie, SUM(montant) AS total, YEAR(date) AS annee, MONTH(date) AS mois
FROM comptabilitedetails
GROUP BY sous_categorie, YEAR(date), MONTH(date)
ORDER BY sous_categorie, YEAR(date), MONTH(date);";

$stmt = $mysqli->prepare($query);
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

$labels = [];
$data = [];
foreach ($results as $row) {
    $label = $row['mois'].'/'.$row['annee'];
    if (!in_array($label, $labels)) {
        $labels[] = $label;
    }
    $data[$row['sous_categorie']][] = $row['total'];
}
?>
