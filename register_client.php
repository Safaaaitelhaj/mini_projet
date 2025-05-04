<?php
include("db.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = "INSERT INTO clients (name, email, password) VALUES ('$name', '$email', '$password')";
    if (mysqli_query($conn, $sql)) {
        header("Location: login_client.php");
        exit;
    } else {
        $error_message = "Erreur : " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"><script src="https://cdn.tailwindcss.com"></script><title>Inscription Client</title></head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
<div class="bg-white p-8 rounded-lg shadow-md w-96">
    <h2 class="text-2xl font-bold mb-4 text-center">Inscription Client</h2>
    <form method="post" class="space-y-4">
        <input type="text" name="name" placeholder="Nom complet" required class="w-full px-4 py-2 border rounded">
        <input type="email" name="email" placeholder="Email" required class="w-full px-4 py-2 border rounded">
        <input type="password" name="password" placeholder="Mot de passe" required class="w-full px-4 py-2 border rounded">
        <button type="submit" class="w-full bg-green-600 text-white py-2 rounded">S'inscrire</button>
    </form>
    <?php if (isset($error_message)) echo "<p class='text-red-500 mt-2'>$error_message</p>"; ?>
</div></body></html>