<?php
include("db.php");
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login_admin.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_client'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = "INSERT INTO clients (name, email, password) VALUES ('$name', '$email', '$password')";
    mysqli_query($conn, $sql);
}

if (isset($_GET['delete'])) {
    $client_id = $_GET['delete'];
    $sql = "DELETE FROM clients WHERE id = $client_id";
    mysqli_query($conn, $sql);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit_client'])) {
    $client_id = $_POST['client_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sql = "UPDATE clients SET name = '$name', email = '$email' WHERE id = $client_id";
    mysqli_query($conn, $sql);
}

$result = mysqli_query($conn, "SELECT * FROM clients");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard Admin</title>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-blue-600 p-4 text-white flex justify-between">
        <h1 class="text-xl">Admin</h1>
        <a href="logout.php" class="bg-red-500 px-3 py-1 rounded">Déconnexion</a>
    </nav>

    <main class="p-6">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
            <h2 class="text-2xl mb-4">Liste des clients</h2>

            <form method="post" class="mb-6">
                <h3 class="text-lg mb-2">Ajouter un client</h3>
                <div class="mb-4">
                    <input type="text" name="name" placeholder="Nom" class="border p-2 w-full" required>
                </div>
                <div class="mb-4">
                    <input type="email" name="email" placeholder="Email" class="border p-2 w-full" required>
                </div>
                <div class="mb-4">
                    <input type="password" name="password" placeholder="Mot de passe" class="border p-2 w-full" required>
                </div>
                <button type="submit" name="add_client" class="bg-green-500 text-white py-2 px-4 rounded">Ajouter Client</button>
            </form>

            <table class="w-full border">
                <thead>
                    <tr>
                        <th class="border p-2">Nom</th>
                        <th class="border p-2">Email</th>
                        <th class="border p-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                        <tr>
                            <td class="border p-2"><?= htmlspecialchars($row['name']) ?></td>
                            <td class="border p-2"><?= htmlspecialchars($row['email']) ?></td>
                            <td class="border p-2">
                                <!-- Lien pour modifier -->
                                <a href="edit_client.php?id=<?= $row['id'] ?>" class="text-blue-500">Modifier</a> |
                                <!-- Lien pour supprimer -->
                                <a href="?delete=<?= $row['id'] ?>" class="text-red-500">Supprimer</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
