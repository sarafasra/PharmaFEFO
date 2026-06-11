<?php

require_once "../config/database.php";
require_once "../src/Repository/StockBatchRepository.php";

echo "<h1>TEST STOCK BATCH REPOSITORY</h1>";

$repo = new StockBatchRepository();

$data = $repo->getAll();

echo "<pre>";
print_r($data);
echo "</pre>";