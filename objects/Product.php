<?php


class Product extends \Tina4\ORM
{
    public $tableName = "product";
    public $primaryKey = "id";
    public $genPrimaryKey = true;

    public $id;
    public $productCode;
    public $description;
    public $costPrice;
    public $retailPrice;
    public $image;
    public $qty;

    public $isActive;
    public $isDeleted;
    
    public $dateCreated;
    public $dateUpdated;

    public $hasMany = [["Ledger" => "productId"]];
}