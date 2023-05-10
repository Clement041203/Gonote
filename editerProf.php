<?php
require_once 'bdd.php';
$id = htmlspecialchars($_GET['idUtilisateur']);
$sql = "SELECT idUtilisateur, nomUtilisateur, prenomUtilisateur, identifiantUtilisateur FROM Professeur
WHERE idUtilisateur = ". $id;
$query = $bdd->query($sql);
$editer = $query->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Modifier compte</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main">
        <div class="box">
            <h1>Modifier le compte</h1>
            <form action="modifierProf.php" method="POST">
                <div class="unInput" style="display:none;">
                    <input for="nameInput" type="text" name="id" 
                    value="<?php foreach ($editer as $edite) {
                        echo ($edite['idUtilisateur']);
                    } ?>" autocomplete="off" required>
                    <label>Id Utilisateur</label>
                </div>
                <div class="unInput">
                    <input for="nameInput" type="text" name="nom" 
                    value="<?php foreach ($editer as $edite) {
                        echo $edite['nomUtilisateur'];
                    } ?>" autocomplete="off" required>
                    <label>Nom</label>
                </div>
                <div class="unInput">
                    <input for="nameInput" type="text" name="prenom" 
                    value="<?php foreach ($editer as $edite) {
                        echo $edite['prenomUtilisateur'];
                    } ?>" autocomplete="off" required>
                    <label>Prénom</label>
                </div>
                <div class="unInput">
                    <input for="nameInput" type="text" name="identifiant" 
                    value="<?php foreach ($editer as $edite) {
                        echo $edite['identifiantUtilisateur'];
                    } ?>" autocomplete="off" required>
                    <label>Identifiant</label>
                </div>

                <div class="connexion">
                    <input type="submit" value="Modifier">
                </div>
            </form>
        </div>
    </div>
</body>

</html>