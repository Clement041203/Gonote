<?php
require_once 'bdd.php';
$id = htmlspecialchars($_GET['idUtilisateur']);


$sql3 = "DELETE FROM effectuer
 WHERE idUtilisateur = $id";
$query3 = $bdd->prepare($sql3);
$query3->execute();


$sql = "DELETE FROM Eleve
 WHERE idUtilisateur = $id";
$query = $bdd->prepare($sql);
$query->execute();


$identifiantUtilisateur = 1; 
$libelle = "Suppression"; 

$sqlInteragir = "INSERT INTO `interagir`(`idUtilisateur`, `idUtilisateur_Administrateur`,`libelle`, `Date` ) VALUES (?,?,?, NOW())";
$queryInteragir = $bdd->prepare($sqlInteragir);
$queryInteragir->bindValue(1, $id);
$queryInteragir->bindValue(2, $identifiantUtilisateur);
$queryInteragir->bindValue(3, $libelle);

$queryInteragir->execute();

$sql2 = "DELETE FROM Utilisateur
 WHERE idUtilisateur = $id";
$query2 = $bdd->prepare($sql2);
$query2->execute();

header("Location: interfaceAdmin.php");
