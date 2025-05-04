<?php
$conn = mysqli_connect("localhost", "root", "", "ecoo_db");
if (!$conn) {
    die("Échec de la connexion à la base de données : " . mysqli_connect_error());
}
?>