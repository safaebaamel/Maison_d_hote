<?php
class connection
{
    private $localhost = "localhost";
    private $user = "root";
    private $db = "brief5";
    private $password = "";

    public function connect()
    {
        try {
            $host = "mysql:host={$this->localhost};dbname={$this->db}";
            $pdo = new PDO($host, $this->user, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Error . {$e->getMessage()}";
        }
    }
}
