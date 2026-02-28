<?php

class Connection
{
    private string $dbHost = "localhost";
    private string $dbName = "users";
    private string $dbUser = "root";
    private string $dbPassword = "";

    public function connect()
    {
        try {
            $con = new PDO("mysql: host={$this->dbHost}; dbname={$this->dbName}; charset=utf8", $this->dbUser, $this->dbPassword);
            return $con;
        } catch (PDOException $e) {
            echo "Erro de conexão - " . $e->getMessage();
        }
    }
}
