<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }

        table, th, td {
            border: 2px solid red;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
           
            color: white;
        }

        a {
            color: red;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
        .add-client-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: red;
            color: white;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .add-client-button:hover {
            background-color: darkred;
        }
        .navbar {
            background-color: red;
            color: black;
            padding: 40px;
            text-align: center;
            position: fixed; /* Fixer la navbar en haut */
            width: 100%; /* Occuper toute la largeur de l'écran */
            top: 0; /* Position en haut de la page */
            left: 0; /* Position à gauche de la page */
        }

        .navbar h1 {
            margin: 0;
            font-size: 30px;
        }
        .content {
            margin-top: 80px; /* Ajuster la marge supérieure pour éviter de chevaucher la navbar */
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 auto;
        }
        .titre{
            font-size: 15px;
        }
    </style>
</head>
<body>
<div class="navbar">
    <h1>Liste Des Clients</h1>
</div>
<div class="content">
<?php
require_once('../controllers/ClientController.php');
$us = new ClientController();
$res = $us->liste();
echo "<table>
    <tr>
        <th class='titre'>id</th>
        <th class='titre'>Nom</th>
        <th class='titre'>Prénom</th>
        <th class='titre'>Age</th>
        <th class='titre'>Téléphone</th>
        <th class='titre'>Email</th>
        <th class='titre'>Mot de passe</th>
        <th class='titre'>Action</th>
    </tr>";

if (is_array($res) || is_object($res)) {
    foreach ($res as $row) {
        echo "
        <tr>
            <td>$row[id_client]</td>
            <td>$row[nom]</td>
            <td>$row[prenom]</td>
            <td>$row[age]</td>
            <td>$row[telephone]</td>
            <td>$row[email]</td>
            <td>$row[mot_2_passe]</td>
            <td>
            <a href ='modif.php?id=$row[id_client]'>Modifier</a>
            <a href='supprimerClient.php?id=$row[id_client]'>Supprimer</a>
            </td>
        </tr>";
    }
}
echo "</table>";
echo "<a class='add-client-button' href='AjouterClient.html'>Ajouter un client</a>";
?>
</div>
</body>
</html>