<?php
include("db.php");
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login_admin.php");
    exit;
}

// Vérification de l'ID du client dans l'URL
if (isset($_GET['id'])) {
    $client_id = $_GET['id'];

    // Récupérer les informations du client
    $result = mysqli_query($conn, "SELECT * FROM clients WHERE id = $client_id");
    $client = mysqli_fetch_assoc($result);
}

// Mettre à jour le client
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit_client'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sql = "UPDATE clients SET name = '$name', email = '$email' WHERE id = $client_id";
    mysqli_query($conn, $sql);
    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Modifier Client</title>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-blue-600 p-4 text-white flex justify-between">
        <h1 class="text-xl">Admin</h1>
        <a href="logout.php" class="bg-red-500 px-3 py-1 rounded">Déconnexion</a>
    </nav>

    <main class="p-6">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
            <h2 class="text-2xl mb-4">Modifier le client</h2>
            <form method="post">
                <div class="mb-4">
                    <input type="text" name="name" value="<?= htmlspecialchars($client['name']) ?>" class="border p-2 w-full" required>
                </div>
                <div class="mb-4">
                    <input type="email" name="email" value="<?= htmlspecialchars($client['email']) ?>" class="border p-2 w-full" required>
                </div>
                <button type="submit" name="edit_client" class="bg-blue-500 text-white py-2 px-4 rounded">Mettre à jour</button>
            </form>
        </div>
    </main>
</body>
</html>
