<?php
ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('../controllers/ClientController.php');
$clientCtr=new ClientController();
$clientCtr->delete($_GET['id']);
header('Location:ListeClient.php');
ob_end_flush();
?>