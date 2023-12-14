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
    <h1>Liste Des Locations</h1>
</div>
<div class="content">
<?php
require_once('../controllers/LocationController.php');
require_once('../controllers/VoitureController.php');
require_once('../controllers/ClientController.php');
$lctr=new LocationController();
$res=$lctr->liste();
echo"<h2>Liste des locations</h1>
<table border='1' width='50%'>";
echo "<tr>
        <td colspan='5'>Location</td>
        <td colspan='2'>Voiture</td>
        <td colspan='2'>Client</td>
      </tr>
      <tr>
        <td>ID</td>
        <td>Date_Debut</td>
        <td>Date_Fin</td>
        <td>Prix</td>
        <td>Action</td>
        <td>Marque</td>
        <td>Immatricule</td>
        <td>Nom</td>
        <td>Prenom</td>
      </tr>";
while($lo=$res->fetch())
    {echo"<tr><td>$lo[0]</td><td>$lo[3]</td><td>$lo[4]</td><td>$lo[5]</td>
        <td><a class='add-client-button' href ='modifLoc.php?id=$lo[0]'>Modifier</a></td>";
        $vctr=new VoitureController();
        $res1=$vctr->liste();
       while( $vo = $res1->fetch())
        {if($vo[0]==$lo[1])
            echo"<td>$vo[2]</td><td>$vo[1]</td>";}
        

        $cctr=new ClientController();
        $res2=$cctr->liste();
        while($cl=$res2->fetch())
       {if($cl[0]==$lo[2])
            echo"<td>$cl[1]</td><td>$cl[2]</td></tr>";}}

echo"</table>";
?>
</div>
</body>
</html>