<?php
require_once "bdd.php";
require "connexionAdmin.php"

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Nouvelle Matière</title>
</head>
<body>
    <div class="main">
        <div class="box">
            <h1>Inscription</h1>
            <form method="POST">
                <div class="unInput">
                    <input for="nameInput" type="text" name="nom" autocomplete="off" required>
                    <label>Nom</label>
                </div>
                <div class="connexion">
                    <input type="submit" value="Ajouter">
                </div>
            </form>
        </div>
    </div>
</body>

</html>