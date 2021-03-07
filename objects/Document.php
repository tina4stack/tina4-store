<?php


class Document extends \Tina4\ORM
{
    public $tableName = "document";
    public $primaryKey = "id";
    public $genPrimaryKey = true;


    public $customerId;
}