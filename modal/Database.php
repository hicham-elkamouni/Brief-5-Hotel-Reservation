<?php
class Database
{
    private $connexion;
    public function __construct()
    {
        $host = 'localhost';
        $dbname = 'northonhotels_db';
        $username = 'root';
        $password = '';
        try {
            $this->connexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    protected function getConnexion()
    {
        return $this->connexion;
    }
}
