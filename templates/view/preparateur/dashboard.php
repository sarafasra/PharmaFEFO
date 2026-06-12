<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Préparateur</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-50">

<?php $lots = $lots ?? []; ?>

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-slate-900 text-white p-5">
        <h1 class="text-xl font-bold mb-6">PharmaFEFO</h1>

        <a class="block py-2 text-sm text-slate-300 hover:text-white">
            📦 Opérations FEFO
        </a>

        <a class="block py-2 text-sm text-slate-300 hover:text-white">
            📱 Scanner Entrée
        </a>
    </aside>

    <!-- MAIN -->
    <main class="flex-1 p-6 space-y-6">

        <h1 class="text-2xl font-bold text-slate-800">
            Espace Préparateur
        </h1>

        <!-- FEFO CARD -->
        <div class="bg-white p-5 rounded-xl shadow">

            <h2 class="font-bold mb-4 text-indigo-600">
                Sortie recommandée (FEFO)
            </h2>

            <?php if (!empty($lots)): ?>
                <?php $next = $lots[0]; ?>

                <div class="bg-indigo-50 p-4 rounded-lg border border-indigo-200">

                    <p class="text-sm text-slate-500">Lot à prélever</p>

                    <p class="text-xl font-bold text-indigo-700">
                        <?= $next['numero_lot'] ?>
                    </p>

                    <p class="text-sm mt-2">
                        Quantité: <b><?= $next['quantite'] ?></b>
                    </p>

                    <p class="text-sm text-red-500">
                        Expiration: <?= $next['date_peremption'] ?>
                    </p>

                </div>

            <?php else: ?>
                <p class="text-slate-500">Aucun lot disponible</p>
            <?php endif; ?>

        </div>

        <!-- ALERTS -->
        <div class="bg-white p-5 rounded-xl shadow">

            <h2 class="font-bold mb-4 text-amber-500">
                ⚠️ Alertes péremption
            </h2>

            <?php foreach ($lots as $lot): ?>

                <?php
                    $days = floor((strtotime($lot['date_peremption']) - time()) / 86400);
                ?>

                <?php if ($days <= 30 && $days > 0): ?>

                    <div class="bg-amber-50 border border-amber-200 p-2 rounded mb-2">
                        ⚠️ <?= $lot['numero_lot'] ?> - expire dans <?= $days ?> jours
                    </div>

                <?php endif; ?>

            <?php endforeach; ?>

        </div>

        <!-- TABLE -->
        <div class="bg-white p-5 rounded-xl shadow overflow-x-auto">

            <h2 class="font-bold mb-4">Stock des lots</h2>

            <table class="w-full text-sm">

                <thead>
                    <tr class="border-b">
                        <th class="text-left p-2">Lot</th>
                        <th class="text-left p-2">Quantité</th>
                        <th class="text-left p-2">Expiration</th>
                        <th class="text-left p-2">Statut</th>
                    </tr>
                </thead>

                <tbody>

                <?php foreach ($lots as $lot): ?>
                    <tr class="border-b">
                        <td class="p-2"><?= $lot['numero_lot'] ?></td>
                        <td class="p-2"><?= $lot['quantite'] ?></td>
                        <td class="p-2"><?= $lot['date_peremption'] ?></td>
                        <td class="p-2"><?= $lot['statut'] ?></td>
                    </tr>
                <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </main>

</div>

</body>
</html>