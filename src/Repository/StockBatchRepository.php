<?php

require_once __DIR__ . "/../../config/database.php";

class StockBatchRepository
{
    public function getAll()
    {
        $pdo = Database::connect();
        return $pdo->query("SELECT * FROM lots")->fetchAll(PDO::FETCH_ASSOC);
    }

public function add($batch, $qty, $date, $status)
{
    $pdo = Database::connect();

    $stmt = $pdo->prepare("
        INSERT INTO lots(
            medicament_id,
            numero_lot,
            quantite,
            date_peremption,
            statut
        )
        VALUES (?, ?, ?, ?, ?)
    ");

    return $stmt->execute([
        1,          
        $batch,
        $qty,
        $date,
        $status
    ]);
}

   public function delete($id)
{
    $pdo = Database::connect();

    $stmt = $pdo->prepare("DELETE FROM lots WHERE id=?");
    return $stmt->execute([$id]);
}
public function getById($id)
{
    $pdo = Database::connect();

    $stmt = $pdo->prepare("SELECT * FROM lots WHERE id=?");
    $stmt->execute([$id]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

public function update($id, $batch, $qty, $date, $status)
{
    $pdo = Database::connect();

    $stmt = $pdo->prepare("
        UPDATE lots 
        SET numero_lot=?, quantite=?, date_peremption=?, statut=?
        WHERE id=?
    ");

    return $stmt->execute([$batch, $qty, $date, $status, $id]);
}
public function getFefoLot()
{
    $pdo = Database::connect();

    $stmt = $pdo->query("
        SELECT *
        FROM lots
        ORDER BY date_peremption ASC
        LIMIT 1
    ");

    return $stmt->fetch(PDO::FETCH_ASSOC);
}
public function getAllOrderedByExpiration()
{
    $pdo = Database::connect();

    $stmt = $pdo->query("
        SELECT *
        FROM lots
        ORDER BY date_peremption ASC
    ");

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
}