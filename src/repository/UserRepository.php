<?php

require_once __DIR__ . "/../../config/db.php";

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

    public function ReadUserRepository()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function UpdateUserRepository($name, $username, $email, $id)
    {
        $sql = "UPDATE users SET name = :name, username = :username, email = :email WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ":name" => $name,
            ":username" => $username,
            ":email" => $email,
            ":id" => $id
        ]);
    }

    public function DeleteUserRepository($id)
    {
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([":id" => $id]);
    }

    public function SearchUserRepository($search)
    {
        $sql = "SELECT * FROM users WHERE name LIKE :search OR username LIKE :search OR email LIKE :search";
        $stmt = $this->pdo->prepare($sql);

        $search = "%" . $search . "%";

        $stmt->execute([":search" => $search]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function TrackUserRepository($id)
    {
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([":id" => $id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
