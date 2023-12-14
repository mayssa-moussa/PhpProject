<?php
require_once('../controllers/LocationController.php');

$id = isset($_GET['id']) ? $_GET['id'] : null;
$locationCtr = new LocationController();
$res = $id ? $locationCtr->getLocation($id) : null;

if ($res) {
    ?>
    <form name='f1' method='post' action='modificationLoc.php'>
        <table border='1'>
            <tr>
                <td>id</td>
                <td><input type="number" name="id" readonly="readonly" value="<?php echo htmlspecialchars($res['id_location']); ?>"/></td>
            </tr>
            <tr>
                <td>id_voiture</td>
                <td><input type="number" name="id_voiture" value="<?php echo htmlspecialchars($res['id_voiture']); ?>"/></td>
            </tr>
            <tr>
                <td>id_client</td>
                <td><input type="number" name="id_client" value="<?php echo htmlspecialchars($res['id_client']); ?>"/></td>
            </tr>
            <tr>
                <td>date_debut</td>
                <td><input type="date" name="date_debut" value="<?php echo htmlspecialchars($res['date_debut']); ?>"/></td>
            </tr>
            <tr>
                <td>date_fin</td>
                <td><input type="date" name="date_fin" value="<?php echo htmlspecialchars($res['date_fin']); ?>"/></td>
            </tr>
            <tr>
                <td>prix</td>
                <td><input type="number" name="prix" value="<?php echo htmlspecialchars($res['prix']); ?>"/></td>
            </tr>
            <tr>
                <td><input type="submit" value="modifier" name="mod"/></td>
            </tr>
        </table>
    </form>
    <?php
} else {
    echo "ID non spécifié ou invalide.";
}
?>
