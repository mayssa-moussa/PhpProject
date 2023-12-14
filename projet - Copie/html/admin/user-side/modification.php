<?php
ob_start();
require_once('../controllers/ClientController.php');
require_once('../models/client.php');
$clientCtr=new ClientController();
$client=new Client();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['mod'])) {
$client->setNom($_POST['nom']);
$client->setPrenom($_POST['prenom']);
$client->setAge($_POST['age']);
$client->setEmail($_POST['email']);
$client->setTelephone($_POST['telephone']);
$client->setMot_2_passe($_POST['mot_2_passe']);
}
$clientCtr->modifier_user($client);
header('Location:ListeClient.php');
ob_end_flush();
?>