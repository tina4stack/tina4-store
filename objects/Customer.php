<?php


class Customer extends \Tina4\ORM
{
    public $tableName = "customer";
    public $primaryKey = "id";
    public $genPrimaryKey = true;

    public $id;
    public $accountNo;
    public $firstName;
    public $lastName;
    public $email;
    public $telephone;
    public $password;
    public $resetURL;
    public $isActive;
    public $isDeleted;

    public $dateCreated;
    public $dateUpdated;

    public $hasMany = [["Address" => "customerId"], ["Document" => "customerId"], ["Ledger" => "customerId"]];

}