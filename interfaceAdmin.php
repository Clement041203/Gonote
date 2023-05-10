<?php
session_start();
require_once "bdd.php";

$sql = "SELECT idUtilisateur, nomUtilisateur, prenomUtilisateur, identifiantUtilisateur, nomClasse, libelleSection FROM Eleve
INNER JOIN Classe on Eleve.idClasse = Classe.idClasse
INNER JOIN Section on Section.idSection = Classe.idSection";
$requete = $bdd->query($sql);
$donnees = $requete->fetchAll();

$sql2 = "SELECT idUtilisateur, nomUtilisateur, prenomUtilisateur, identifiantUtilisateur, nomMatiere FROM Professeur
INNER JOIN Matiere on Matiere.idMatiere = Professeur.idMatiere ";
$query2 = $bdd->query($sql2);
$donneesProf = $query2->fetchAll();

$sql3 = "SELECT * FROM Matiere";
$query3 = $bdd->query($sql3);
$donneesMatiere = $query3->fetchAll();

$sql4 = "SELECT * FROM Classe";
$query4 = $bdd->query($sql4);
$donneesClasse = $query4->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Espace Administrateur</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="sidebar">
        <div class="sidebarBox">
        <h2>ESPACE ADMIN</h2>
            <?php
            if (!isset($_SESSION['user'])) {
                // Si l'utilisateur n'est pas connecté, le rediriger vers la page de connexion
                header("Location: connexionAdmin.php");
                exit();
            } else {
                // Si l'utilisateur est connecté, afficher la page
                ?> <p><?php echo "Bienvenue " . $_SESSION['user']["identifiant"] . " !";
            }
            ?></p> 
        </div>

       

        <ul>
            <li><a href="#" onclick="changerTexte()"><i class="fa-solid fa-users"></i>Eleves</a></li>
            <li><a href="#" onclick="changerProf()"><i class="fa-solid fa-user"></i>Professeurs</a></li>
            <li><a href="#" onclick="matiere()"><i class="fa-solid fa-clipboard"></i>Matières</a></li>
            <li><a href="#" onclick="classe()"><i class="fa-sharp fa-solid fa-chalkboard-user"></i>Classe</a></li>
            <li><a href="deco.php"><i class="fa-solid fa-right-from-bracket"></i>Se deconnecter</a></li>

            <!-- <li><a href="Historique.php">Historique</a></li> -->
        </ul>
    </div>

    <div id="texte1">
        <nav>
            <h2 class="logo">Eleves</h2>
            <div class="btn">
                <a href="ajouterEtudiant.php" class="connexion">Ajouter un Eleve</a><i class="fa-solid fa-user-plus"></i>
            </div>
        </nav>

        <div class="eleves">
            <br>
            <?php echo "<table><thead><tr><th>Nom</th><th>Prenom</th><th>Identifiant</th><th>Niveau</th><th>Classe</th><th>Action</th></tr></thead>";

            echo "<tbody>";
            // Boucle pour parcourir les données et les afficher dans des <tr>
            foreach ($donnees as $donnee) {
                echo "<tr><td>" . $donnee["nomUtilisateur"] . "</td><td>" . $donnee["prenomUtilisateur"] . "</td><td>" . $donnee["identifiantUtilisateur"] . "</td><td>" . $donnee["libelleSection"] . "</td><td>" . $donnee["nomClasse"] . "</td><td>"
            ?><a href="editerEtudiant.php?idUtilisateur=<?php echo $donnee["idUtilisateur"] ?>"><i class="fa-solid fa-file-pen action"></i></a>
                <a href="supprimerEtudiant.php?idUtilisateur=<?php echo $donnee["idUtilisateur"] ?>"><i class="fa-solid fa-trash action"></i></a>
            <?php "</td></tr>";
            }
            echo "</tbody>";
            echo "</table>";
            ?>
        </div>
    </div>

    <div id="texte2" style="display: none" ;>
        <nav>
            <h2 class="logo">Professeur</h2>
            <div class="btn">
                <a href="ajouterProf.php" class="connexion">Ajouter un Professeur</a><i class="fa-solid fa-user-plus"></i>
            </div>
        </nav>

        <div class="prof">
            <br>
            <?php echo "<table><thead><tr><th>Nom</th><th>Prenom</th><th>Identifiant</th><th>Matiere</th><th>Action</th></tr></thead>";

            echo "<tbody>";
            // Boucle pour parcourir les données et les afficher dans des <tr>
            foreach ($donneesProf as $donneeEncours) {
                echo "<tr><td>" . $donneeEncours["nomUtilisateur"] . "</td><td>" . $donneeEncours["prenomUtilisateur"] . "</td><td>" . $donneeEncours["identifiantUtilisateur"] . "</td><td>" . $donneeEncours["nomMatiere"] . "</td><td>"
            ?><a href="editerProf.php?idUtilisateur=<?php echo $donneeEncours["idUtilisateur"] ?>"><i class="fa-solid fa-file-pen action"></i></a>
                <a href="supprimerProf.php?idUtilisateur=<?php echo $donneeEncours["idUtilisateur"] ?>"><i class="fa-solid fa-trash action"></i></a>
            <?php "</td></tr>";
            }
            echo "</tbody>";
            echo "</table>";
            ?>
        </div>        
    </div>

<div class="matiere" id="matiere" style="display: none";>
        <nav>
            <h2 class="logo">Matiere</h2>
            <div class="btn">
                <a href="ajouterMatiere.php" class="connexion">Nouvelle Matière</a><i class="fa-solid fa-user-plus"></i>
            </div>
        </nav>

        <div class="prof">
            <br>
            <?php echo "<table><thead><tr><th>Nom</th><th>Action</th></tr></thead>";

            echo "<tbody>";
            // Boucle pour parcourir les données et les afficher dans des <tr>
            foreach ($donneesMatiere as $donneeEncours) {
                echo "<tr><td>" . $donneeEncours["nomMatiere"] . "</td><td>"
            ?><a href="editerMatiere.php?idMatiere=<?php echo $donneeEncours["idMatiere"] ?>"><i class="fa-solid fa-file-pen action"></i></a>
                <a href="supprimerMatiere.php?idMatiere=<?php echo $donneeEncours["idMatiere"] ?>"><i class="fa-solid fa-trash action"></i></a>
            <?php "</td></tr>";
            }
            echo "</tbody>";
            echo "</table>";
            ?>
        </div> 
    </div>


    <div class="classe" id="classe" style="display: none";>
        <nav>
            <h2 class="logo">Classe</h2>
            <div class="btn">
                <a href="ajouterClasse.php" class="connexion">Nouvelle Classe</a><i class="fa-solid fa-user-plus"></i>
            </div>
        </nav>

        <div class="prof">
            <br>
            <?php echo "<table><thead><tr><th>Classe existante</th><th>Action</th></tr></thead>";

            echo "<tbody>";
            // Boucle pour parcourir les données et les afficher dans des <tr>
            foreach ($donneesClasse as $donneeEncours) {
                echo "<tr><td>" . $donneeEncours["nomClasse"] . "</td><td>"
            ?><a href="editerClasse.php?idClasse=<?php echo $donneeEncours["idClasse"] ?>"><i class="fa-solid fa-file-pen action"></i></a>
                <a href="supprimerMatiere.php?idMatiere=<?php echo $donneeEncours["idMatiere"] ?>"><i class="fa-solid fa-trash action"></i></a>
            <?php "</td></tr>";
            }
            echo "</tbody>";
            echo "</table>";
            ?>
        </div> 
    </div>

    <script src="js.js"></script>

</body>

</html>