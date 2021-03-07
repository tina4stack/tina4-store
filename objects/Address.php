<?php


class Address extends \Tina4\ORM
{
    public $tableName = "address";
    public $primaryKey = "id";
    public $genPrimaryKey = true;

    public $id;
    public $fullAddress;
    public $suburb;
    public $city;
    public $state;
    public $country;
    public $postalCode;

    public $isBilling;
    public $isShipping;
    public $isActive;
    public $isDeleted;

    public $dateCreated;
    public $dateUpdated;

    public $customerId;

}