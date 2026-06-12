<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - PharmaFEFO</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-50 text-sm">

<div class="flex min-h-screen">

<!-- SIDEBAR -->
<aside class="w-64 bg-slate-900 text-white p-4">
    <h1 class="font-bold mb-6">PharmaFEFO</h1>

    <a class="block py-2 text-slate-300">Dashboard</a>
    <a class="block py-2 text-slate-300">Lots</a>
</aside>

<!-- MAIN -->
<main class="flex-1 p-6 space-y-6">

<!-- HEADER -->
<div class="flex justify-between items-center">
    <h1 class="text-2xl font-bold">Espace Administrateur</h1>

    <a href="index.php?logout=1"
       class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">
        Déconnexion
    </a>
</div>

<!-- FEFO CARD -->
<?php if (!empty($lots)): ?>
<?php $fefo = $lots[0]; ?>

<div class="bg-indigo-50 border border-indigo-200 p-4 rounded shadow">

    <h2 class="font-bold text-indigo-700 mb-2">
        🔥 FEFO (Next lot à sortir)
    </h2>

    <p><b>Lot:</b> <?= $fefo['numero_lot'] ?></p>
    <p><b>Quantité:</b> <?= $fefo['quantite'] ?></p>
    <p class="text-red-500"><b>Expiration:</b> <?= $fefo['date_peremption'] ?></p>

</div>
<?php endif; ?>

<!-- STATS -->
<div class="grid grid-cols-2 gap-4">

<div class="bg-white p-4 rounded shadow">
    <p>Total Lots</p>
    <h2 class="text-xl font-bold"><?= count($lots ?? []) ?></h2>
</div>

<div class="bg-white p-4 rounded shadow">
    <p>Lots périmés</p>
    <h2 class="text-xl font-bold text-red-500">
        <?php
        $expired = 0;
        foreach ($lots ?? [] as $l) {
            if ($l['statut'] === 'EXPIRED') $expired++;
        }
        echo $expired;
        ?>
    </h2>
</div>

</div>

<div class="bg-white p-4 rounded shadow">

<h2 class="font-bold mb-3">Ajouter Lot</h2>

<form method="POST" action="index.php">

    <input name="batch_number" placeholder="Batch"
        class="border p-2 mr-2">

    <input name="quantity" placeholder="Quantity"
        class="border p-2 mr-2">

    <input type="date" name="expiration_date"
        class="border p-2 mr-2">

    <input name="status" placeholder="Status"
        class="border p-2 mr-2">

    <button name="add"
        class="bg-green-500 text-white px-3 py-2 rounded">
        Add
    </button>

</form>

</div>

<div class="bg-white p-4 rounded shadow">

<table class="w-full text-sm">

<thead>
<tr class="border-b">
    <th class="p-2 text-left">Lot</th>
    <th class="p-2 text-left">Qty</th>
    <th class="p-2 text-left">Expiration</th>
    <th class="p-2 text-left">Status</th>
    <th class="p-2 text-left">Action</th>
</tr>
</thead>

<tbody>

<?php foreach ($lots ?? [] as $lot): ?>

<tr class="border-b">

<td class="p-2"><?= $lot['numero_lot'] ?></td>
<td class="p-2"><?= $lot['quantite'] ?></td>
<td class="p-2"><?= $lot['date_peremption'] ?></td>

<!-- STATUS COLORS -->
<td class="p-2">
<?php
$status = $lot['statut'];

if ($status === 'EXPIRED') {
    $color = "bg-red-500";
} elseif ($status === 'WARNING') {
    $color = "bg-orange-500";
} else {
    $color = "bg-green-500";
}
?>
<span class="<?= $color ?> text-white px-2 py-1 rounded text-xs">
    <?= $status ?>
</span>
</td>

<td class="p-2 flex gap-2">

<a href="index.php?edit=<?= $lot['id'] ?>"
   class="bg-blue-500 text-white px-2 py-1 rounded text-xs">
    Edit
</a>

<a href="index.php?delete=<?= $lot['id'] ?>"
   onclick="return confirm('Delete ?')"
   class="bg-red-500 text-white px-2 py-1 rounded text-xs">
    Delete
</a>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>

</main>

</div>

</body>
</html>