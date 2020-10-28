<?php
 

class Users{

private PDO #$pdo;


public function __construct()
{
    $this->pdo = DbConnection::getDb();
}

public function findAll(){


    $statement =$this->pdo->query("SELECT * FROM users");
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
}
$users = NEW Users();
$users->findAll();
