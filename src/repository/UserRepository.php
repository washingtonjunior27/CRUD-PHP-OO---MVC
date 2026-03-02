<?php

require __DIR__ . "../../../config/db.php";

class UserRepository
{
    private $pdo;

    public function __construct()
    {
        $con = new Connection();
        $this->pdo = $con->Connect();
    }

    public function CreateUserRepository($name, $username, $password, $email)
    {
        $sql = "INSERT INTO users (name, username, password, email) VALUES (:name, :username, :password, :email)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ":name" => $name,
            ":username" => $username,
            ":password" => $password,
            ":email" => $email
        ]);
    }
}
