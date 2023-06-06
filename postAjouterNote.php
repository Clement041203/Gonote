<?php
require_once 'bdd.php';

$selectDevoir = htmlspecialchars($_POST["devoir"]);

$selectEleve = htmlspecialchars($_POST["eleve"]);

$noteEleve = htmlspecialchars($_POST["note"]);  



if (!empty($_POST)) {
    if (isset($selectEleve, $noteEleve, $selectDevoir)) {
        $sql = "INSERT INTO `effectuer`(`idDevoir`,`idUtilisateur`,`note`, `dateNote`) VALUES (:idDevoir, :idUtilisateur, :note, CURDATE())";
        $query = $bdd->prepare($sql);
        $query->bindValue(":idDevoir", $selectDevoir);
        $query->bindValue(":idUtilisateur", $selectEleve);
        $query->bindValue(":note", $noteEleve);
            
        $query->execute();

            header("Location: interfaceProf.php");
        }else{
            die("le formulaire est incomplet");
        }
    }
?>