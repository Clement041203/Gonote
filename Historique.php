<?php
require_once 'bdd.php';

$sql = "SELECT  idOperation, idEleve, Eleves.nomEleve, Eleves.prenomEleve, `Date`, idProf, idTypeOpe FROM HistoriqueEleves
INNER JOIN Eleves on Eleves.idUser = HistoriqueEleves.idEleve;";
$requete = $bdd->query($sql);
$donnees = $requete->fetchAll();




?>
<div class="prof">
    <br>
    <?php echo "<table><thead><tr><th>Type Operation</th></tr></thead>";

    echo "<tbody>";
    // Boucle pour parcourir les données et les afficher dans des <tr>
    foreach ($donnees as $donnee) {
        echo "<tr><td>" . $donnee["idOperation"] . "</td></tr>";
    }
    echo "</tbody>";
    echo "</table>";
    ?>
</div>