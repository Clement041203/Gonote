<?php
require_once 'bdd.php';

$id = htmlspecialchars($_POST['id']);
$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$identifiant = htmlspecialchars($_POST['identifiant']);

// $classe = htmlspecialchars($_POST['classe']);


$sql ="UPDATE `Eleve` SET `nomUtilisateur`='".$nom."',`prenomUtilisateur`='".$prenom."',`identifiantUtilisateur`='".$identifiant."' WHERE idUtilisateur = ".$id;
$query = $bdd->prepare($sql);
$query->execute();

$sql2 ="UPDATE `Utilisateur` SET `nomUtilisateur`='".$nom."',`prenomUtilisateur`='".$prenom."',`identifiantUtilisateur`='".$identifiant."' WHERE idUtilisateur = ".$id;
$query2 = $bdd->prepare($sql2);
$query2->execute();

header('Location: interfaceAdmin.php');
exit();
