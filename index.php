<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Site E-commerce</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Lien vers Tailwind CSS -->
</head>
<body class="bg-gray-100 font-sans">

    <!-- Section d'accueil avec un fond élégant et un titre professionnel -->
    <header class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold leading-tight mb-6">Bienvenue sur notre site e-commerce</h1>
            <p class="text-lg sm:text-xl">Découvrez des produits de qualité et gérez vos commandes en toute simplicité.</p>
            <p class="mt-2 text-gray-300">Votre expérience d'achat en ligne simplifiée et sécurisée.</p>
        </div>
    </header>

    <!-- Section principale avec des liens de navigation -->
    <main class="py-20 px-6">
        <div class="container mx-auto text-center space-y-8">
            <h2 class="text-3xl font-semibold text-gray-700">Commencez dès aujourd'hui</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12">
                <div class="bg-white shadow-xl rounded-lg p-8 transform hover:scale-105 transition-all duration-300">
                    <h3 class="text-xl font-semibold text-blue-600">Connexion Admin</h3>
                    <p class="text-gray-500 mt-2">Accédez à l'interface de gestion des clients et des produits.</p>
                    <a href="login_admin.php" class="mt-4 inline-block text-white bg-blue-600 hover:bg-blue-700 py-2 px-4 rounded-full text-lg">Se connecter</a>
                </div>
                <div class="bg-white shadow-xl rounded-lg p-8 transform hover:scale-105 transition-all duration-300">
                    <h3 class="text-xl font-semibold text-blue-600">Connexion Client</h3>
                    <p class="text-gray-500 mt-2">Accédez à votre espace personnel et gérez vos commandes.</p>
                    <a href="login_client.php" class="mt-4 inline-block text-white bg-blue-600 hover:bg-blue-700 py-2 px-4 rounded-full text-lg">Se connecter</a>
                </div>
                <div class="bg-white shadow-xl rounded-lg p-8 transform hover:scale-105 transition-all duration-300">
                    <h3 class="text-xl font-semibold text-blue-600">Inscription Client</h3>
                    <p class="text-gray-500 mt-2">Créez un compte pour commencer vos achats en ligne.</p>
                    <a href="register_client.php" class="mt-4 inline-block text-white bg-green-600 hover:bg-green-700 py-2 px-4 rounded-full text-lg">S'inscrire</a>
                </div>
            </div>
        </div>
    </main>

    <!-- Section pied de page avec contact et mentions légales -->
    <footer class="bg-gray-800 text-white py-6 mt-20">
        <div class="container mx-auto text-center">
            <p class="text-lg mb-2">Mini E-commerce © 2025. Tous droits réservés.</p>
            <div>
                <a href="#" class="text-gray-300 hover:text-white mx-4">Mentions légales</a>
                <a href="#" class="text-gray-300 hover:text-white mx-4">Contact</a>
            </div>
        </div>
    </footer>

</body>
</html>
