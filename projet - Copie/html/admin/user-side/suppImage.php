<?php
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('../controllers/ImagesController.php');
$resCtr=new ImagesController();
$resCtr->delete($_GET['id']);
header('Location:ListeImages.php');
ob_end_flush();
?>