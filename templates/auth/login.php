<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Connexion - PharmaFEFO</title>

<script src="https://cdn.tailwindcss.com"></script>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
body{
    font-family:'Poppins',sans-serif;
}
</style>

</head>

<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-600 to-slate-900">

<div class="bg-white w-full max-w-md p-8 rounded-3xl shadow-2xl">

    <div class="text-center mb-8">

        <div class="w-20 h-20 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <span class="text-4xl">💊</span>
        </div>

        <h1 class="text-3xl font-bold text-slate-800">
            PharmaFEFO
        </h1>

        <p class="text-slate-500 mt-2">
            Gestion intelligente des stocks pharmaceutiques
        </p>

    </div>

    <form method="POST" action="index.php?login=1" class="space-y-5">

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-2">
                Adresse Email
            </label>

            <input
                type="email"
                name="email"
                placeholder="admin@pharma.com"
                required
                class="w-full border border-slate-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-2">
                Mot de passe
            </label>

            <input
                type="password"
                name="password"
                placeholder="********"
                required
                class="w-full border border-slate-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <button
            type="submit"
            class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-3 rounded-xl font-semibold transition duration-300 shadow-lg">
            Se connecter
        </button>

    </form>

    <div class="mt-8 border-t pt-4 text-center text-xs text-slate-400">
        © 2026 PharmaFEFO
    </div>

</div>

</body>
</html>