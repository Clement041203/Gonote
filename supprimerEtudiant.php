<?php
require_once 'bdd.php';
$id = htmlspecialchars($_GET['idUtilisateur']);
$sql = "DELETE FROM Eleve
 WHERE idUtilisateur = $id";
$query = $bdd->prepare($sql);
$query->execute();

$sql2 = "DELETE FROM Utilisateur
 WHERE idUtilisateur = $id";
$query2 = $bdd->prepare($sql2);
$query2->execute();

header("Location: interfaceAdmin.php");
