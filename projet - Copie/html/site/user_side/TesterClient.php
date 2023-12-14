<?php
session_start();
ob_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('../controllers/ClientController.php');
require_once('../models/client.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $md = $_POST['md'];
        $clientCtr = new ClientController();
        $res = $clientCtr->liste();
        $clientTrouve = false;

        while ($l = $res->fetch()) {
            if ($email == $l['email'] && $md == $l['mot_2_passe']) {
                $clientTrouve = true;
                $_SESSION['id_client'] = $l['id_client'];
                break;
            }
        }
}
    if ($clientTrouve) {
        header('Location: contact2.php');
        ob_end_flush();
    } else {
        echo 'Test';
        echo '<html><head>';
        echo '<script>';
        echo 'alert("Veuillez créer un compte !");';
        echo 'window.location.href = "login.html";';
        echo '</script>';
        echo '</head><body></body></html>';
        ob_end_flush();
    }
?>