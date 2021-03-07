<?php


class ProductAttribute extends \Tina4\ORM
{
    public $tableName = "product_attribute";
    public $primaryKey = "id";
    public $genPrimaryKey = true;

    public $id;
    public $name;

    public $isActive;
    public $isDeleted;

    public $dateCreated;
    public $dateUpdated;
}