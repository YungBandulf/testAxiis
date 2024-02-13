<?php
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'putaindemotdepasse');
define('DB_NAME', 'compta_propre');

$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($mysqli === false){
    die("ERREUR : Impossible de se connecter. " . $mysqli->connect_error);
}
?>
