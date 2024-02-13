<?php

include '../model/config.php';


$query = "SELECT sous_categorie, SUM(montant) AS total, YEAR(date) AS annee, MONTH(date) AS mois
FROM comptabilitedetails
GROUP BY sous_categorie, YEAR(date), MONTH(date)
ORDER BY sous_categorie, YEAR(date), MONTH(date);";

$results = $mysqli->query($query);


$labels = [];
$data = [];

if ($results !== false && $results->num_rows > 0) {
    while($row = $results->fetch_assoc()) {
        $label = $row['mois'].'/'.$row['annee'];
        if (!in_array($label, $labels)) {
            $labels[] = $label;
        }
        $data[$row['sous_categorie']][] = $row['total'];
    }
} else {
    echo "0 résultats";
}
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Graphiques Comptabilité</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<canvas id="myChart" width="800" height="400"></canvas>

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: <?php echo json_encode($labels); ?>,
        datasets: [
            <?php foreach ($data as $sousCategorie => $montants): ?>
            {
                label: '<?php echo addslashes($sousCategorie); ?>',
                data: <?php echo json_encode(array_values($montants)); ?>,
                fill: false,
                borderColor: 'rgba(' + Math.floor(Math.random() * 255) + ', ' + Math.floor(Math.random() * 255) + ', ' + Math.floor(Math.random() * 255) + ', 1)',
                tension: 0.1
            },
            <?php endforeach; ?>
        ]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>

</body>
</html>
