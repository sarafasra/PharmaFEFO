<?php

require_once __DIR__ . "/../../config/database.php";

class StockBatchRepository
{
    public function getAll()
    {
        $pdo = Database::connect();

        $stmt = $pdo->query("SELECT * FROM lots");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}









?>