<?php
session_start();
 require_once "bdd.php";
$classe = $_SESSION['user']['classe'];
$eleve = $_SESSION['user']['id'];


$sql = "SELECT libelleDevoir, descriptionDevoir, dateDevoir, nomMatiere FROM Devoir
INNER JOIN Professeur on Professeur.idUtilisateur = Devoir.idUtilisateur
INNER JOIN Matiere on Matiere.idMatiere = Professeur.idMatiere
WHERE idClasse = :classe";
$query = $bdd->prepare($sql);
$query->bindParam(':classe', $classe);
$query->execute();
$devoirClasse = $query->fetchAll();

$sql2 = "SELECT note, dateDevoir, libelleDevoir, nomMatiere, effectuer.idUtilisateur FROM effectuer
INNER JOIN Devoir on Devoir.idDevoir = effectuer.idDevoir
INNER JOIN Professeur on Professeur.idUtilisateur = Devoir.idUtilisateur
INNER JOIN Matiere on Matiere.idMatiere = Professeur.idMatiere
WHERE idClasse = :classe AND effectuer.idUtilisateur = :eleve";
$query2 = $bdd->prepare($sql2);
$query2->bindParam(':classe', $classe);
$query2->bindParam(':eleve', $eleve);
$query2->execute();
$noteDevoir = $query2->fetchAll();
 
?>

<!DOCTYPE html>
<html lang="FR">
<head>
  <meta charset="UTF-8">
  <title>Interface Eleve</title>
  <link rel="stylesheet" href="eleve.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="lds-ring" id="loader"><div></div><div></div><div></div><div>Veuillez patienter</div></div>
<div id="interface">
<div class="sidebar">
    <div class="sidebarBox">
      <h2>ESPACE Eleve</h2>
    </div>

    <ul>
      <li><a href="#" onclick="afficherDevoir()"><i class="fa-solid fa-user"></i>Mes Devoirs</a></li>
      <li><a href="#" onclick="afficherNote()"><i class="fa-solid fa-clipboard"></i>Mes notes</a></li>
      <li><a href="#"><i class="fa-sharp fa-solid fa-chalkboard-user"></i>Mes données</a></li>
      <li><a href="deco.php"><i class="fa-solid fa-right-from-bracket"></i>Se deconnecter</a></li>
    </ul>
  </div>

  <div class="welcome-message" id="welcome">
    <?php
            if (!isset($_SESSION['user'])) {
                // Si l'utilisateur n'est pas connecté, le rediriger vers la page de connexion
                header("Location: connexionAdmin.php");
                exit();
            } else {
                // Si l'utilisateur est connecté, afficher la page
                ?> <h1><?php echo "Bienvenue " . $_SESSION['user']["identifiant"] . " !";
            }
            ?></h1> 
    <p>Vous êtes connecté à votre interface Eleve.</p>
</div>


<div id="devoir" class="container" style="display:none;">
      <h1>Mes devoirs</h1>
    <br>
    <?php
    echo "<table><thead><tr><th>Matiere</th><th>Libelle</th><th>Description</th><th>Date de mise en ligne</th><th>Marqué comme fait</th></tr></thead>";

    echo "<tbody>";
    // Boucle pour parcourir les données et les afficher dans des <tr>
    foreach ($devoirClasse as $devoirEncours) {
        echo "<tr><td>" . $devoirEncours["nomMatiere"] . "</td><td>" . $devoirEncours["libelleDevoir"] . "</td><td>" . $devoirEncours["descriptionDevoir"] . "</td><td>" . $devoirEncours["dateDevoir"] . "</td><td><input type='checkbox' class='devoirCheckbox' onchange='handleCheckboxChange(this)'></td></tr>";
    }
    echo "</tbody>";
    echo "</table>";
    ?>
</div>

<div id="note" class="container" style="display:none;">
      <h1>Mes notes</h1>
    <br>
    <?php
    echo "<table><thead><tr><th>Libelle</th><th>Libelle</th><th>Note</th><th>Date de mise en ligne</th></tr></thead>";

    echo "<tbody>";
    // Boucle pour parcourir les données et les afficher dans des <tr>
    foreach ($noteDevoir as $noteEncours) {
        echo "<tr><td>" . $noteEncours["nomMatiere"] . "</td><td>" . $noteEncours["libelleDevoir"] . "</td><td>" . $noteEncours["note"] . "</td><td>" . $noteEncours["dateDevoir"] ."</td></tr>";
    }
    echo "</tbody>";
    echo "</table>";
    ?>
</div>
</div>

<script src="eleve.js"></script>
</body>
</html>