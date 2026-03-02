<?php

class Connection
{
    private string $dbHost = "localhost";
    private string $dbName = "users";
    private string $dbUser = "root";
    private string $dbPassword = "";

    public function Connect()
    {
        try {
            $con = new PDO("mysql:host={$this->dbHost};dbname={$this->dbName};charset=utf8", $this->dbUser, $this->dbPassword);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $con;
        } catch (PDOException $e) {
            echo "Erro de conexão - " . $e->getMessage();
            return null;
        }
    }
}
