<?php
session_start();


$identifiant = htmlspecialchars($_POST['identifiant']);
$pass = htmlspecialchars($_POST['password']);


if (!empty($_POST)) {
    if (isset($identifiant, $pass) && !empty($identifiant) && !empty($pass)) {
        require_once "bdd.php";

        $sql = "SELECT * FROM `Professeur` WHERE `identifiant` = :identifiant ";

        $query = $bdd->prepare($sql);
        $query->bindValue(":identifiant", $identifiant);
        $query->execute();

        $user = $query->fetch();


        if (!$user) {
            die('L\'identifiant et/ou le mot de passe est incorrect');
        }

        if (!password_verify($pass, $user['password'])) {
            var_dump($pass);
            die('L\'identifiant et/ou le mot de passe est incorrect');
        }

        $_SESSION['user'] = [
            "id" => $user["idUser"],
            "identifiant" => $identifiant
        ];

        header("Location: interfaceProf.php");
    } else {
        die('Un champ ou plusieurs ne sont pas rempli(s)');
    }
}
