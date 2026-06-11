<?php 
require_once __DIR__ . "/../../config/database.php";
class StockBatchRepository {
    public function getALL(){
        $pdo = Database::connect();
        $stmt = $pdo->query("SELECT * FROM lots" );
        return $stmt->fetchALL($PDO::FETCH_ASSOC);
    }
}











?>