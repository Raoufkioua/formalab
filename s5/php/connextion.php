<?php

class Connextion
{
    public static function connect()
    {
        $server = "localhost";
        $base = "mabase_15082019";
        $username = "root";
        $password = "";
        $connexionUrl = "mysql:host=$server;dbname=$base";

        try {
            $conn = new PDO($connexionUrl, $username, $password);
            return $conn;
        } catch (PDOException $e) {
            die("Erreur : $e->getMessage()");
        }
    }
}
?>