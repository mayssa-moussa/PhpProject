<?php
include_once('../database/config.php');
include_once('../models/images.php') ;
class ImagesController extends Connexion{
function __construct() {
parent::__construct();
}
public function insertImage($nom, $type, $taille, $bin) {
    $sql = "INSERT INTO images (nom, type, taille, bin) VALUES (?, ?, ?, ?)";
    try {
        $result = $this->pdo->prepare($sql);
        $result->execute(array($nom, $type, $taille, $bin));
        return true;
    } catch (PDOException $e) {
        echo "Erreur SQL : " . $e->getMessage();
        return false;
    }
}

public function getImages() {
    $sql = "SELECT * FROM images";
    $res = $this->pdo->prepare($sql);
    $res->execute();
    return $res;
}
public function getImagesArray() {
    $sql = "SELECT * FROM images";
    $res = $this->pdo->prepare($sql);
    $res->execute();
    return $res->fetchAll(PDO::FETCH_ASSOC);
}
function delete($idImage) {
    $query = "delete from images where id=?";
    $res=$this->pdo->prepare($query);
    return $res->execute(array($idImage));
    }
}
?>