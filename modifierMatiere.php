<?php
require_once 'bdd.php';

$id = htmlspecialchars($_POST['id']);
$nom = htmlspecialchars($_POST['nom']);

$sql ="UPDATE `Matiere` SET `nomMatiere`='".$nom."' WHERE idMatiere = ".$id;
$query = $bdd->prepare($sql);
$query->execute();


header('Location: interfaceAdmin.php#matiere');
