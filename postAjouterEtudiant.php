<?php
require_once 'bdd.php';
$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$identifiant = htmlspecialchars($_POST['identifiant']);
$niveau = htmlspecialchars($_POST['selectNiveau']);
$nomClasse = htmlspecialchars($_POST['selectClasse']);
$pass = htmlspecialchars($_POST['password']);
$passValider = htmlspecialchars($_POST['passwordValider']);


if (!empty($_POST)) {
    if (
        isset($nom, $prenom, $identifiant, $niveau, $nomClasse, $pass, $passValider)
    ) {
        if ($pass != $passValider) {
            die("l'identifiant ou le mot de passe est incorrect");
        } else {
            $pass = password_hash($pass, PASSWORD_ARGON2ID);
            
            $sql2 = "INSERT INTO `Utilisateur`(`nomUtilisateur`,`prenomUtilisateur`,`identifiantUtilisateur`,`passwordUtilisateur`) VALUES (:nom, :prenom, :identifiantUtilisateur, :pass)";
            $query2 = $bdd->prepare($sql2);
            $query2->bindValue(":nom", $nom);
            $query2->bindValue(":prenom", $prenom);
            $query2->bindValue(":identifiantUtilisateur", $identifiant);
            $query2->bindValue(":pass", $pass);
            
            $query2->execute();

            $id = $bdd->lastInsertId();

            $sql = 'INSERT INTO `Eleve`(`idUtilisateur`,`nomUtilisateur`,`prenomUtilisateur`,`identifiantUtilisateur`,`passwordUtilisateur`, `idClasse`) VALUES (?, ?, ?, ?, ?, ?)';
            
            $query = $bdd->prepare($sql);
            $query->bindValue(1, $id);
            $query->bindValue(2, $nom);
            $query->bindValue(3, $prenom);
            $query->bindValue(4, $identifiant);
            $query->bindValue(5, $pass);
            $query->bindValue(6, $nomClasse);

            $query->execute();

            header("Location: interfaceAdmin.php");
        }
    } else {
        die("le formulaire est incomplet");
    }
}
