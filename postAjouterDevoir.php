<?php
session_start();
require_once "bdd.php";

  $utilisateur = $_SESSION['user']['id'];
  $libelle = htmlspecialchars($_POST['libelle']);
  $description = htmlspecialchars($_POST['description']);
  $classe = htmlspecialchars($_POST['classe']);
  
  if (!empty($_POST)) {
    if (isset($libelle, $description)) {
        $sql = "INSERT INTO `Devoir`(`libelleDevoir`,`descriptionDevoir`,`dateDevoir`,`idUtilisateur`,`idClasse`) VALUES (:libelle, :descriptionDevoir, CURDATE(), :utilisateur, :idClasse)";
        $query = $bdd->prepare($sql);
        $query->bindValue(":libelle", $libelle);
        $query->bindValue(":descriptionDevoir", $description);
        $query->bindValue(":utilisateur", $utilisateur);
        $query->bindValue(":idClasse", $classe);
            
        $query->execute();

            header("Location: interfaceProf.php");
        }else{
            die("le formulaire est incomplet");
        }
    }


?>