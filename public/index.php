<?php

session_start();

require_once __DIR__ . "/../src/Controller/StockController.php";
require_once __DIR__ . "/../src/Entity/UserController.php";

$controller = new StockController();
$userController = new UserController();


if (isset($_GET['login'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $userController->login();
    } else {
        $userController->loginForm();
    }
    exit;
}


if (isset($_GET['logout'])) {
    $userController->logout();
    exit;
}


if (!isset($_SESSION['user'])) {
    header("Location: index.php?login=1");
    exit;
}


if (isset($_POST['add'])) {
    $controller->add();
}

if (isset($_GET['delete'])) {
    $controller->delete();
}

if (isset($_POST['update'])) {
    $controller->update();
}


$role = $_SESSION['user']['role'];

switch ($role) {

    case 'ADMIN':
        $controller->dashboard();
        break;

    case 'PHARMACIEN':
        $controller->dashboard();
        break;

    case 'PREPARATEUR':
        $controller->fefo(); 
        break;

    default:
        echo "Role inconnu";
}