<?php
require_once 'bdd.php';

$id = htmlspecialchars($_POST['id']);
$nom = htmlspecialchars($_POST['nom']);

$sql ="UPDATE `Classe` SET `nomClasse`='".$nom."' WHERE idClasse = ".$id;
$query = $bdd->prepare($sql);
$query->execute();


header('Location: interfaceAdmin.php#classe');
