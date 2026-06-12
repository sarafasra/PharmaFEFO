<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>


<body class="bg-slate-50 text-sm">

<div class="flex min-h-screen">


<aside class="w-64 bg-slate-900 text-white p-4">
    <h1 class="font-bold mb-6">PharmaStock</h1>
</aside>


<main class="flex-1 p-6 space-y-6">

<h1 class="text-2xl font-bold">Espace Administrateur</h1>


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
            if ($l['statut'] == 'EXPIRED') $expired++;
        }
        echo $expired;
        ?>
    </h2>
</div>

</div>


<?php if (isset($editLot)): ?>

<div class="bg-yellow-50 p-4 rounded shadow border">

<h2 class="font-bold mb-3">Modifier Lot</h2>

<form method="POST" action="index.php">

    <input type="hidden" name="id" value="<?= $editLot['id'] ?>">

    <input name="batch_number"
        value="<?= $editLot['numero_lot'] ?>"
        class="border p-2 mr-2">

    <input name="quantity"
        value="<?= $editLot['quantite'] ?>"
        class="border p-2 mr-2">

    <input type="date"
        name="expiration_date"
        value="<?= $editLot['date_peremption'] ?>"
        class="border p-2 mr-2">

    <input name="status"
        value="<?= $editLot['statut'] ?>"
        class="border p-2 mr-2">

    <button name="update"
        class="bg-blue-500 text-white px-3 py-2 rounded">
        Update
    </button>

</form>

</div>

<?php endif; ?>


<div class="bg-white p-4 rounded shadow">

<table class="w-full text-sm">

<thead>
<tr class="border-b">
    <th class="text-left p-2">Lot</th>
    <th class="text-left p-2">Qty</th>
    <th class="text-left p-2">Expiration</th>
    <th class="text-left p-2">Status</th>
    <th class="text-left p-2">Action</th>
</tr>
</thead>

<tbody>

<?php foreach ($lots ?? [] as $lot): ?>

<tr class="border-b">

<td class="p-2"><?= $lot['numero_lot'] ?></td>
<td class="p-2"><?= $lot['quantite'] ?></td>
<td class="p-2"><?= $lot['date_peremption'] ?></td>
<td class="p-2"><?= $lot['statut'] ?></td>

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

