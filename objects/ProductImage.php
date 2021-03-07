<?php


class ProductImage extends \Tina4\ORM
{
    public $tableName = "product_image";
    public $primaryKey = "id";
    public $genPrimaryKey = true;

    public $id;
    public $imageCaption;
    public $image;

    public $isActive;
    public $isDeleted;

    public $dateCreated;
    public $dateUpdated;
}