<?php


class ProductCategory extends \Tina4\ORM
{
    public $tableName = "product_category";
    public $primaryKey = "id";
    public $genPrimaryKey = true;

    public $id;
    public $name;
    public $parentId;

    public $isActive;
    public $isDeleted;
    
    public $dateCreated;
    public $dateUpdated;
}