<?php
session_start();
 require_once "bdd.php";

if (!isset($_SESSION['user'])) {
  // Si l'utilisateur n'est pas connecté, le rediriger vers la page de connexion
  header("Location: connexionEleve.php");
  exit();
} else {
  // Si l'utilisateur est connecté, afficher la page
  echo "Bienvenue ".$_SESSION['user']["identifiant"]." !";
}


?>