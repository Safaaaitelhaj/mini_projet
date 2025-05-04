<?php
include("db.php");
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['admin'] = $username;
        header("Location: dashboard.php");
    } else {
        $error = "Identifiants incorrects";
    }
}
?>
<!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"><script src="https://cdn.tailwindcss.com"></script><title>Connexion Admin</title></head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
<div class="bg-white p-8 rounded-lg shadow-md w-96">
    <h2 class="text-2xl font-bold mb-4 text-center">Connexion Admin</h2>
    <form method="post" class="space-y-4">
        <input type="text" name="username" placeholder="Nom d'utilisateur" required class="w-full px-4 py-2 border rounded">
        <input type="password" name="password" placeholder="Mot de passe" required class="w-full px-4 py-2 border rounded">
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded">Se connecter</button>
    </form>
    <?php if (isset($error)) echo "<p class='text-red-500 mt-2'>$error</p>"; ?>
</div></body></html>