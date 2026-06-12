<?php

require_once __DIR__ . "/../src/Controller/StockController.php";

$controller = new StockController();

if (isset($_POST['add'])) {
    $controller->add();
}

if (isset($_GET['delete'])) {
    $controller->delete();
}

if (isset($_POST['update'])) {
    $controller->update();
}



$controller->dashboard();