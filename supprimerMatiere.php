<?php
require_once 'bdd.php';
$id = htmlspecialchars($_GET['idMatiere']);

$sql2 = "DELETE FROM MatiereSection
 WHERE idMatiere = $id";
$query2 = $bdd->prepare($sql2);
$query2->execute();


$sql = "DELETE FROM Matiere
 WHERE idMatiere = $id";
$query = $bdd->prepare($sql);
$query->execute();

header("Location: interfaceAdmin.php#matiere");
