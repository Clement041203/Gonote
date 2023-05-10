<?php
require_once 'bdd.php';

$sql = "SELECT idMatiere, nomMatiere FROM Matiere";
$requete = $bdd->query($sql);
$matieres = $requete->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main">
        <div class="box">
            <h1>Inscription Profs</h1>
            <form action="postAjouterProf.php" method="POST">
                <div class="unInput">
                    <input for="nameInput" type="text" name="nom" autocomplete="off" required>
                    <label>Nom</label>
                </div>
                <div class="unInput">
                    <input for="nameInput" type="text" name="prenom" autocomplete="off" required>
                    <label>Prénom</label>
                </div>
                <SELECT name="matiere">
                    <?php
                    foreach ($matieres as $matiere) { ?>
                        <option value="<?php echo $matiere["idMatiere"] ?>">
                            <?php
                            echo $matiere["nomMatiere"]
                            ?></option>
                    <?php }; ?>
                </SELECT>
                <div class="unInput">
                    <input for="nameInput" type="text" name="identifiant" autocomplete="off" required>
                    <label>Identifiant</label>
                </div>
                <div class="unInput">
                    <input for="nameInput" type="password" name="password" autocomplete="off" required>
                    <label>Mot de passe</label>
                </div>
                <div class="unInput">
                    <input for="nameInput" type="password" name="passwordValider" autocomplete="off" required>
                    <label>Confirmer le mot de passe</label>
                </div>

                <div class="connexion">
                    <input type="submit" value="Ajouter">
                </div>
            </form>
        </div>
    </div>
</body>

</html>