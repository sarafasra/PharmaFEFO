<?php

class StockBatch
{
    private $id;
    private $productId;
    private $batchNumber;
    private $quantity;
    private $expirationDate;
    private $status;

    public function __construct($id, $productId, $batchNumber, $quantity, $expirationDate, $status)
    {
        $this->id = $id;
        $this->productId = $productId;
        $this->batchNumber = $batchNumber;
        $this->quantity = $quantity;
        $this->expirationDate = $expirationDate;
        $this->status = $status;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getProductId()
    {
        return $this->productId;
    }

    public function getBatchNumber()
    {
        return $this->batchNumber;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    public function setBatchNumber($batchNumber)
    {
        $this->batchNumber = $batchNumber;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }
}