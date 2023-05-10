<?php
require_once 'bdd.php';
$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$matiere = htmlspecialchars($_POST['matiere']);
$identifiant = htmlspecialchars($_POST['identifiant']);
$pass = htmlspecialchars($_POST['password']);
$passValider = htmlspecialchars($_POST['passwordValider']);

if (!empty($_POST)) {
    if (isset($nom, $prenom, $matiere, $identifiant, $pass, $passValider)) {
        if ($pass != $passValider) {
            die ("l'identifiant ou le mot de passe est incorrect");
        } else {
            $pass = password_hash($pass, PASSWORD_ARGON2ID);

            $sql = "INSERT INTO `Utilisateur`(`nomUtilisateur`,`prenomUtilisateur`,`identifiantUtilisateur`,`passwordUtilisateur`) VALUES (:nom, :prenom, :identifiantUtilisateur, :pass)";
            $query = $bdd->prepare($sql);
            $query->bindValue(":nom", $nom);
            $query->bindValue(":prenom", $prenom);
            $query->bindValue(":identifiantUtilisateur", $identifiant);
            $query->bindValue(":pass", $pass);
            
            $query->execute();

            $id = $bdd->lastInsertId();

            $sql2 = 'INSERT INTO `Professeur`(`idUtilisateur`,`nomUtilisateur`,`prenomUtilisateur`,`identifiantUtilisateur`,`passwordUtilisateur`, `idMatiere`) VALUES (?, ?, ?, ?, ?, ?)';
            
            $query2 = $bdd->prepare($sql2);
            $query2->bindValue(1, $id);
            $query2->bindValue(2, $nom);
            $query2->bindValue(3, $prenom);
            $query2->bindValue(4, $identifiant);
            $query2->bindValue(5, $pass);
            $query2->bindValue(6, $matiere);

            $query2->execute();

            header("Location: interfaceAdmin.php#texte2");
        }
    } else {
        die("le formulaire est incomplet");
    }
}
