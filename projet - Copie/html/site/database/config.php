<?php
ob_start();
abstract class Connexion {
protected $pdo;
function __construct()
{
    try {
        $this->pdo = new PDO('mysql:host=localhost;dbname=firstcar', 'root', '');
    } catch (PDOException $e) {
        die("Erreur de connexion à la base de données : " . $e->getMessage());
    }
}
function __destruct()
{
$this->pdo=null;
}
}
ob_end_flush();
?>