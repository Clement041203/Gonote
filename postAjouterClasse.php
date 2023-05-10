<?php
require_once 'bdd.php';
$nom = htmlspecialchars($_POST['nom']);
$niveau = htmlspecialchars($_POST['selectNiveau']);

if (!empty($_POST)) {
    if (isset($nom)) {

        $sql2 = "INSERT INTO `Classe`(`nomClasse`,`idSection`) VALUES (:nom, :section)";
        $query2 = $bdd->prepare($sql2);
        $query2->bindValue(":nom", $nom);
        $query2->bindValue(":section", $niveau);

        $query2->execute();
        header("Location: interfaceAdmin.php#classe");
    }
} else {
    die("le formulaire est incomplet");
}
