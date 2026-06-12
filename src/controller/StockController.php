<?php

require_once __DIR__ . "/../Repository/StockBatchRepository.php";

class StockController
{
    private $repo;

    public function __construct()
    {
        $this->repo = new StockBatchRepository();
    }


    public function dashboard()
    {
        $lots = $this->repo->getAll();

        $totalLots = count($lots);

        $expiredLots = 0;

        foreach ($lots as $lot) {
            if ($lot['statut'] === 'EXPIRED') {
                $expiredLots++;
            }
        }

        $editLot = null;

        if (isset($_GET['edit'])) {
            $editLot = $this->repo->getById($_GET['edit']);
        }

        require __DIR__ . "/../../templates/view/admin/dashboard.php";
    }

   
    public function add()
    {
        $this->repo->add(
            $_POST['batch_number'],
            $_POST['quantity'],
            $_POST['expiration_date'],
            $_POST['status']
        );

        header("Location: index.php");
        exit;
    }
    public function delete()
    {
        $id = $_GET['delete'] ?? null;

        if ($id) {
            $this->repo->delete($id);
        }

        header("Location: index.php");
        exit;
    }

    public function update()
    {
        $this->repo->update(
            $_POST['id'],
            $_POST['batch_number'],
            $_POST['quantity'],
            $_POST['expiration_date'],
            $_POST['status']
        );

        header("Location: index.php");
        exit;
    }
}