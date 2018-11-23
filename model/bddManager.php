<?php

abstract class BddManager
{

    private $bdd;

    public function __construct()
    {
        $bdd = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8mb4", DB_LOGIN, DB_PWD);
        $this->bdd = $bdd;

    }

    public function getBdd()
    {
        return $this->bdd;
    }

}