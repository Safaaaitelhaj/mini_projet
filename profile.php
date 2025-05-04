<?php
include("../db.php");
session_start();
if (!isset($_SESSION['client'])) {
    header("Location: ../login_client.php");
    exit;
}

$email = $_SESSION['client'];
$query = mysqli_query($conn, "SELECT * FROM clients WHERE email='$email'");
$client = mysqli_fetch_assoc($query);
$nom = $client['name'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Profil Client</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

    <nav class="bg-blue-600 p-4 text-white flex justify-between items-center shadow">
        <h1 class="text-xl font-bold">Espace Client</h1>
        <a href="../logout.php" class="bg-red-500 hover:bg-red-600 px-4 py-2 rounded">Déconnexion</a>
    </nav>

    
    <div class="max-w-4xl mx-auto mt-10 bg-white p-8 rounded-lg shadow-md text-center">
        <h2 class="text-2xl font-bold mb-4">Bienvenue, <?= htmlspecialchars($nom) ?> </h2>
        <p class="mb-6 text-gray-700">Vous êtes connecté avec succès à votre espace personnel.</p>

        <div class="text-left mt-6">
            <h3 class="text-xl font-semibold text-blue-600 mb-2">Que pouvez-vous faire ici ?</h3>
            <ul class="list-disc list-inside text-gray-800">
                <li>Voir vos commandes récentes</li>
                <li>Mettre à jour vos coordonnées</li>
                <li>Accéder aux offres spéciales clients</li>
                <li>Contacter le support à tout moment</li>
            </ul>
        </div>
    </div>

</body>
</html>
