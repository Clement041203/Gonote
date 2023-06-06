<?php
require_once 'bdd.php';

$sql = "SELECT nomUtilisateur, prenomUtilisateur, libelle FROM interagir
INNER JOIN Utilisateur ON Utilisateur.idUtiliateur = interagir.idUtilisateur;";
$requete = $bdd->query($sql);
$donnees = $requete->fetchAll();




?>
<div class="prof">
    <br>
    <?php echo "<table><thead><tr><th>Utilisateur</th><th>Etat</th></tr></thead>";

    echo "<tbody>";
    // Boucle pour parcourir les données et les afficher dans des <tr>
    foreach ($donnees as $donneeEncours) {
        echo "<tr><td>" . $donneeEncours["nomUtilisateur"] . $donneeEncours["prenomUtilisateur"]. "</td>
        <td>" . $donneeEncours["libelle"] ."</td></tr>";
    }
    echo "</tbody>";
    echo "</table>";
    ?>
</div>