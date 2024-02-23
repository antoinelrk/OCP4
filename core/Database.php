<?php
class Database
{
    public $connection = null;

    public function __construct($host, $database, $user, $password) {
        try
        {
            $this->connection = new \PDO(
                "mysql:host=$host;dbname=$database;charset=utf8",
                $user,
                $password,
                [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]
            );
        }
        catch (\Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}