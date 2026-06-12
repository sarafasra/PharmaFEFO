<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Préparateur</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body { font-family: Arial; }
    </style>
</head>

<body class="bg-slate-50">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-slate-900 text-white p-4">
        <h1 class="text-lg font-bold mb-6">PharmaStock</h1>

        <a class="block py-2 text-sm text-slate-300">Opérations FEFO</a>
        <a class="block py-2 text-sm text-slate-300">Scanner</a>
    </aside>

    <!-- MAIN -->
    <main class="flex-1 p-6 space-y-6">

        <!-- TITLE -->
        <h1 class="text-2xl font-bold text-slate-800">
            Espace Préparateur
        </h1>

        <!-- FEFO CARD -->
        <div class="bg-white p-5 rounded shadow">

            <h2 class="font-bold mb-4">Sortie recommandée (FEFO)</h2>

            <?php if (!empty($lots)): 
                $next = $lots[0];
            ?>

            <div class="bg-slate-50 p-4 rounded border">

                <p class="text-sm text-slate-500">Lot à prélever</p>
                <p class="text-lg font-bold">
                    <?= $next['numero_lot'] ?>
                </p>

                <p class="text-sm mt-2">
                    Quantité: <?= $next['quantite'] ?>
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
        <div class="bg-white p-5 rounded shadow">

            <h2 class="font-bold mb-4">Alertes</h2>

            <?php foreach ($lots as $lot): ?>

                <?php
                    $days = (strtotime($lot['date_peremption']) - time()) / 86400;
                ?>

                <?php if ($days <= 30 && $days > 0): ?>

                    <div class="border p-2 rounded mb-2">
                        ⚠️ <?= $lot['numero_lot'] ?> - expire bientôt
                    </div>

                <?php endif; ?>

            <?php endforeach; ?>

        </div>

        <!-- TABLE -->
        <div class="bg-white p-5 rounded shadow overflow-x-auto">

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