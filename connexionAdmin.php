<?php
require_once "bdd.php";
session_start();

$identifiant = htmlspecialchars($_POST['identifiant']);
$pass = htmlspecialchars($_POST['password']);

if (!empty($_POST)) {
    if (isset($identifiant, $pass) && !empty($identifiant) && !empty($pass)) {

        $sql = "SELECT * FROM `Administrateur` WHERE `identifiantUtilisateur` = :identifiant ";

        $query = $bdd->prepare($sql);
        $query->bindValue(":identifiant", $identifiant);
        $query->execute();

        $user = $query->fetch();




        if (!$user) {
            die('L\'identifiant et/ou le mot de passe est incorrect');
        }

        if ($pass !== $user['passwordUtilisateur']) {
            die('L\'identifiant et/ou le mot de passe est incorrect');
        }

        $_SESSION['user'] = [
            "id" => $user["idUser"],
            "identifiant" => $identifiant
        ];

        header("Location: interfaceAdmin.php");
    } else {
        die('Un champ ou plusieurs ne sont pas rempli(s)');
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>GoNote</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="general">
    <div class="main">
        <div class="box">
            <h1>Espace Administrateur</h1>
            <img src="media/administrateur.png" alt="">
            <form method="post">
                <div class="unInput">
                    <input type="text" name="identifiant" required>
                    <label for>Identifiant</label>
                </div>
                <div class="unInput">
                    <input type="password" name="password" required>
                    <label>Mot de passe</label>
                </div>
                <div class="connexion">
                    <input type="submit" value="Se connecter">
                    <a href="#">Se connecter</a>
                </div>
            </form>
        </div>
    </div>
</body>