<?php
session_start();
require_once "bdd.php";
$identifiantUtilisateur = $_SESSION['user']['identifiant'];



$sql = "SELECT nomClasse, idClasse FROM Classe
INNER JOIN MatiereSection on MatiereSection.idSection = Classe.idSection
INNER JOIN Matiere on Matiere.idMatiere = MatiereSection.idMatiere
INNER JOIN Professeur on Professeur.idMatiere = MatiereSection.idMatiere
WHERE Professeur.identifiantUtilisateur = :identifiantUtilisateur";
$query = $bdd->prepare($sql);
$query->bindParam(':identifiantUtilisateur', $identifiantUtilisateur);
$query->execute();
$donneesClasse = $query->fetchAll();

$sql2 = "SELECT idDevoir, libelleDevoir FROM Devoir WHERE idClasse = 1 ";
$query2 = $bdd->prepare($sql2);
$query2->execute();
$nomDevoirM1 = $query2->fetchAll();

$sql3 = "SELECT  idUtilisateur, nomUtilisateur, prenomUtilisateur FROM Eleve WHERE idClasse = 1";
$query3 = $bdd->prepare($sql3);
$query3->execute();
$nomEleveM1 = $query3->fetchAll();

$sql4 = "SELECT idDevoir, libelleDevoir FROM Devoir WHERE idClasse = 2 ";
$query4 = $bdd->prepare($sql4);
$query4->execute();
$nomDevoirM2 = $query4->fetchAll();

$sql5 = "SELECT  idUtilisateur, nomUtilisateur, prenomUtilisateur FROM Eleve WHERE idClasse = 2";
$query5 = $bdd->prepare($sql5);
$query5->execute();
$nomEleveM2 = $query5->fetchAll();

$sql6 = "SELECT idDevoir, libelleDevoir FROM Devoir WHERE idClasse = 3 ";
$query6 = $bdd->prepare($sql6);
$query6->execute();
$nomDevoirM3 = $query6->fetchAll();

$sql7 = "SELECT  idUtilisateur, nomUtilisateur, prenomUtilisateur FROM Eleve WHERE idClasse = 3";
$query7 = $bdd->prepare($sql7);
$query7->execute();
$nomEleveM3 = $query7->fetchAll();

$sql8 = "SELECT idDevoir, libelleDevoir FROM Devoir WHERE idClasse = 4 ";
$query8 = $bdd->prepare($sql8);
$query8->execute();
$nomDevoirM4 = $query8->fetchAll();

$sql9 = "SELECT  idUtilisateur, nomUtilisateur, prenomUtilisateur FROM Eleve WHERE idClasse = 4";
$query9 = $bdd->prepare($sql9);
$query9->execute();
$nomEleve9 = $query9->fetchAll();

$sql10 = "SELECT idDevoir, libelleDevoir FROM Devoir WHERE idClasse = 5 ";
$query10 = $bdd->prepare($sql10);
$query10->execute();
$nomDevoirM5 = $query10->fetchAll();

$sql11 = "SELECT  idUtilisateur, nomUtilisateur, prenomUtilisateur FROM Eleve WHERE idClasse = 5";
$query11 = $bdd->prepare($sql11);
$query11->execute();
$nomEleveM5 = $query11->fetchAll();
////////////////////////////MATHEMATIQUE///////////////////////////////////

$sql12 = "SELECT idDevoir, libelleDevoir FROM Devoir WHERE idClasse = 6";
$query12 = $bdd->prepare($sql12);
$query12->execute();
$nomDevoirMathM1 = $query12->fetchAll();

$sql13 = "SELECT  idUtilisateur, nomUtilisateur, prenomUtilisateur FROM Eleve WHERE idClasse = 6";
$query13 = $bdd->prepare($sql13);
$query13->execute();
$nomEleveMathM1 = $query13->fetchAll();

$sql14 = "SELECT idDevoir, libelleDevoir FROM Devoir WHERE idClasse = 7 ";
$query14 = $bdd->prepare($sql14);
$query14->execute();
$nomDevoirMathM2 = $query14->fetchAll();

$sql15 = "SELECT  idUtilisateur, nomUtilisateur, prenomUtilisateur FROM Eleve WHERE idClasse = 7";
$query15 = $bdd->prepare($sql15);
$query15->execute();
$nomEleveMathM2 = $query15->fetchAll();

$sql16 = "SELECT idDevoir, libelleDevoir FROM Devoir WHERE idClasse = 8 ";
$query16 = $bdd->prepare($sql16);
$query16->execute();
$nomDevoirMathM3 = $query16->fetchAll();

$sql17 = "SELECT  idUtilisateur, nomUtilisateur, prenomUtilisateur FROM Eleve WHERE idClasse = 8";
$query17 = $bdd->prepare($sql17);
$query17->execute();
$nomEleveMathM3 = $query17->fetchAll();

$sql18 = "SELECT idDevoir, libelleDevoir FROM Devoir WHERE idClasse = 9 ";
$query18 = $bdd->prepare($sql18);
$query18->execute();
$nomDevoirMathM4 = $query18->fetchAll();

$sql19 = "SELECT  idUtilisateur, nomUtilisateur, prenomUtilisateur FROM Eleve WHERE idClasse = 9";
$query19 = $bdd->prepare($sql19);
$query19->execute();
$nomEleveMathM4 = $query19->fetchAll();

$sql20 = "SELECT idDevoir, libelleDevoir FROM Devoir WHERE idClasse = 10 ";
$query20 = $bdd->prepare($sql20);
$query20->execute();
$nomDevoirMathM5 = $query20->fetchAll();

$sql21 = "SELECT  idUtilisateur, nomUtilisateur, prenomUtilisateur FROM Eleve WHERE idClasse = 10";
$query21 = $bdd->prepare($sql21);
$query21->execute();
$nomEleveMathM5 = $query21->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Espace Professeur</title>
  <link rel="stylesheet" href="prof.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>

<div class="lds-ring" id="loader"><div></div><div></div><div></div><div>Veuillez patienter</div></div>
<div id="interface">
<div class="sidebar">
    <div class="sidebarBox">
      <h2>ESPACE Professeur</h2>
    </div>

    <ul>
      <li><a href="#" onclick="devoir()"><i class="fa-solid fa-user"></i>Nouveau devoir</a></li>
      <li><a href="#" onclick="note()"><i class="fa-solid fa-clipboard"></i>Ajouter une note</a></li>
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
    <p>Vous êtes connecté à votre interface Professeur.</p>
</div>

  <div id="AjouterDevoir" class="devoir" style="display:none;">

    <h1>Ajout de Devoir</h1>
    <div class="form-container">
      <form action="postAjouterDevoir.php" method="POST">
        <div class="listeEleve">
          <div class="customSelect">
            <select id="classeSelect" name="classe" onchange="afficherDevoir()">
              <option value="#">Choisir une classe</option>
              <?php
              foreach ($donneesClasse as $donneeEncours): ?>
                <option value="<?php echo $donneeEncours["idClasse"] ?>">
                  <?php
                  echo $donneeEncours["nomClasse"]
                    ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>

        <div id="form" style="display:none;">
          <label for="libelle">Libellé :</label>
          <input type="text" id="libelle" name="libelle" required>

          <label for="description">Description :</label>
          <textarea id="description" name="description" rows="4" required></textarea>


          <input type="submit" value="Ajouter">
        </div>
      </form>
    </div>
  </div>

  <div id="ajouterNote" style="display:none;">
    <h1>Formulaire</h1>

    <div class="custom-form">

      <form action="postAjouterNote.php" method="POST">

        <label class="custom-label" for="select1">Classe</label>
        <select id="classeSelectNote" class="custom-select" name="classe" onchange="afficherDevoirNote()">
          <option value="#">Choisir une classe</option>
          <?php
          foreach ($donneesClasse as $donneeEncours): ?>
            <option value="<?php echo $donneeEncours["idClasse"] ?>">
              <?php
              echo $donneeEncours["nomClasse"]
                ?>
            </option>
          <?php endforeach; ?>
        </select>
        <select id="devoirSelectM1" class="custom-select" name="devoir" style="display: none;">
          <option value="#">Choisir un devoir</option>
          <?php
          foreach ($nomDevoirM1 as $DevoirEnCours): ?>
            <option value="<?php echo $DevoirEnCours["idDevoir"] ?>">
              <?php
              echo $DevoirEnCours["libelleDevoir"]
                ?>
            </option>
          <?php endforeach; ?>
        </select>
        <br><br>

        <select id="eleveSelectM1" class="custom-select" name="eleve" style="display: none;">
          <option value="#">Choisir un eleve</option>
          <?php
          foreach ($nomEleveM1 as $donneeEncours): ?>
            <option value="<?php echo $donneeEncours["idUtilisateur"] ?>">
              <?php
              echo $donneeEncours["nomUtilisateur"] . " " . $donneeEncours["prenomUtilisateur"]
                ?>
            </option>
          <?php endforeach; ?>
        </select>
        <br><br>
        <select id="devoirSelectM2" class="custom-select" name="devoir" style="display: none;">
              <option value="#">Choisir un devoir</option>
              <?php
              foreach ($nomDevoirM2 as $DevoirEnCours): ?>
                <option value="<?php echo $DevoirEnCours["idDevoir"] ?>">
                  <?php
                  echo $DevoirEnCours["libelleDevoir"]
                    ?>
                </option>
              <?php endforeach; ?>
            </select>
            <br><br>
            
            <select id="eleveSelectM2" class="custom-select" name="eleve" style="display: none;">
              <option value="#">Choisir un eleve</option>
              <?php
              foreach ($nomEleveM2 as $donneeEncours): ?>
                <option value="<?php echo $donneeEncours["idUtilisateur"] ?>">
                  <?php
                  echo $donneeEncours["nomUtilisateur"] . " ". $donneeEncours["prenomUtilisateur"]
                    ?>
                </option>
              <?php endforeach; ?>
            </select>
            <select id="devoirSelectM3" class="custom-select" name="devoir" style="display: none;">
              <option value="#">Choisir un devoir</option>
              <?php
              foreach ($nomDevoirM3 as $DevoirEnCours): ?>
                <option value="<?php echo $DevoirEnCours["idDevoir"] ?>">
                  <?php
                  echo $DevoirEnCours["libelleDevoir"]
                    ?>
                </option>
              <?php endforeach; ?>
            </select>
            
            <select id="eleveSelectM3" class="custom-select" name="eleve" style="display: none;">
              <option value="#">Choisir un eleve</option>
              <?php
              foreach ($nomEleveM3 as $donneeEncours): ?>
                <option value="<?php echo $donneeEncours["idUtilisateur"] ?>">
                  <?php
                  echo $donneeEncours["nomUtilisateur"] . " ". $donneeEncours["prenomUtilisateur"]
                    ?>
                </option>
              <?php endforeach; ?>
            </select>
            <select id="devoirSelectM4" class="custom-select" name="devoir" style="display: none;">
              <option value="#">Choisir un devoir</option>
              <?php
              foreach ($nomDevoirM4 as $DevoirEnCours): ?>
                <option value="<?php echo $DevoirEnCours["idDevoir"] ?>">
                  <?php
                  echo $DevoirEnCours["libelleDevoir"]
                    ?>
                </option>
              <?php endforeach; ?>
              </select>            
            <select id="eleveSelectM4" class="custom-select" name="eleve" style="display: none;">
              <option value="#">Choisir un eleve</option>
              <?php
              foreach ($nomEleveM4 as $donneeEncours): ?>
                <option value="<?php echo $donneeEncours["idUtilisateur"] ?>">
                  <?php
                  echo $donneeEncours["nomUtilisateur"] . " ". $donneeEncours["prenomUtilisateur"]
                    ?>
                </option>
              <?php endforeach; ?>
            </select>
            <select id="devoirSelectM5" class="custom-select" name="devoir" style="display: none;">
              <option value="#">Choisir un devoir</option>
              <?php
              foreach ($nomDevoirM5 as $DevoirEnCours): ?>
                <option value="<?php echo $DevoirEnCours["idDevoir"] ?>">
                  <?php
                  echo $DevoirEnCours["libelleDevoir"]
                    ?>
                </option>
              <?php endforeach; ?>
            </select>
            
            <select id="eleveSelectM5" class="custom-select" name="eleve" style="display: none;">
              <option value="#">Choisir un eleve</option>
              <?php
              foreach ($nomEleveM5 as $donneeEncours): ?>
                <option value="<?php echo $donneeEncours["idUtilisateur"] ?>">
                  <?php
                  echo $donneeEncours["nomUtilisateur"] . " ". $donneeEncours["prenomUtilisateur"]
                    ?>
                </option>
              <?php endforeach; ?>
            </select>
              <!---------------MATHEMATIQUE------------------>
              <select id="devoirMathSelectM1" class="custom-select" name="devoir" style="display: none;">
          <option value="#">Choisir un devoir</option>
          <?php
          foreach ($nomDevoirMathM1 as $DevoirEnCours): ?>
            <option value="<?php echo $DevoirEnCours["idDevoir"] ?>">
              <?php
              echo $DevoirEnCours["libelleDevoir"]
                ?>
            </option>
          <?php endforeach; ?>
        </select>

        <select id="eleveMathSelectM1" class="custom-select" name="eleve" style="display: none;">
          <option value="#">Choisir un eleve</option>
          <?php
          foreach ($nomEleveMathM1 as $donneeEncours): ?>
            <option value="<?php echo $donneeEncours["idUtilisateur"] ?>">
              <?php
              echo $donneeEncours["nomUtilisateur"] . " " . $donneeEncours["prenomUtilisateur"]
                ?>
            </option>
          <?php endforeach; ?>
        </select>
        <select id="devoirMathSelectM2" class="custom-select" name="devoir" style="display: none;">
              <option value="#">Choisir un devoir</option>
              <?php
              foreach ($nomDevoirMathM2 as $DevoirEnCours): ?>
                <option value="<?php echo $DevoirEnCours["idDevoir"] ?>">
                  <?php
                  echo $DevoirEnCours["libelleDevoir"]
                    ?>
                </option>
              <?php endforeach; ?>
            </select>
            
            <select id="eleveMathSelectM2" class="custom-select" name="eleve" style="display: none;">
              <option value="#">Choisir un eleve</option>
              <?php
              foreach ($nomEleveMathM2 as $donneeEncours): ?>
                <option value="<?php echo $donneeEncours["idUtilisateur"] ?>">
                  <?php
                  echo $donneeEncours["nomUtilisateur"] . " ". $donneeEncours["prenomUtilisateur"]
                    ?>
                </option>
              <?php endforeach; ?>
            </select>
            <select id="devoirMathSelectM3" class="custom-select" name="devoir" style="display: none;">
              <option value="#">Choisir un devoir</option>
              <?php
              foreach ($nomDevoirMathM3 as $DevoirEnCours): ?>
                <option value="<?php echo $DevoirEnCours["idDevoir"] ?>">
                  <?php
                  echo $DevoirEnCours["libelleDevoir"]
                    ?>
                </option>
              <?php endforeach; ?>
            </select>
            
            <select id="eleveMathSelectM3" class="custom-select" name="eleve" style="display: none;">
              <option value="#">Choisir un eleve</option>
              <?php
              foreach ($nomEleveMathM3 as $donneeEncours): ?>
                <option value="<?php echo $donneeEncours["idUtilisateur"] ?>">
                  <?php
                  echo $donneeEncours["nomUtilisateur"] . " ". $donneeEncours["prenomUtilisateur"]
                    ?>
                </option>
              <?php endforeach; ?>
            </select>
            <select id="devoirMathSelectM4" class="custom-select" name="devoir" style="display: none;">
              <option value="#">Choisir un devoir</option>
              <?php
              foreach ($nomDevoirMathM4 as $DevoirEnCours): ?>
                <option value="<?php echo $DevoirEnCours["idDevoir"] ?>">
                  <?php
                  echo $DevoirEnCours["libelleDevoir"]
                    ?>
                </option>
              <?php endforeach; ?>
              </select>            
            <select id="eleveMathSelectM4" class="custom-select" name="eleve" style="display: none;">
              <option value="#">Choisir un eleve</option>
              <?php
              foreach ($nomEleveMathM4 as $donneeEncours): ?>
                <option value="<?php echo $donneeEncours["idUtilisateur"] ?>">
                  <?php
                  echo $donneeEncours["nomUtilisateur"] . " ". $donneeEncours["prenomUtilisateur"]
                    ?>
                </option>
              <?php endforeach; ?>
            </select>
            <select id="devoirMathSelectM5" class="custom-select" name="devoir" style="display: none;">
              <option value="#">Choisir un devoir</option>
              <?php
              foreach ($nomDevoirMathM5 as $DevoirEnCours): ?>
                <option value="<?php echo $DevoirEnCours["idDevoir"] ?>">
                  <?php
                  echo $DevoirEnCours["libelleDevoir"]
                    ?>
                </option>
              <?php endforeach; ?>
            </select>
            
            <select id="eleveMathSelectM5" class="custom-select" name="eleve" style="display: none;">
              <option value="#">Choisir un eleve</option>
              <?php
              foreach ($nomEleveMathM5 as $donneeEncours): ?>
                <option value="<?php echo $donneeEncours["idUtilisateur"] ?>">
                  <?php
                  echo $donneeEncours["nomUtilisateur"] . " ". $donneeEncours["prenomUtilisateur"]
                    ?>
                </option>
              <?php endforeach; ?>
            </select>


        <input class="custom-input" type="number" id="numberInput" name="note" placeholder="Entrez une note"
          style="display: none;" />
        <input class="custom-submit" type="submit" id="envoie" value="Envoyer" style="display: none;" />
      </form>
    </div>
  </div>
</div>
  



  <script src="prof.js"></script>

</body>

</html>