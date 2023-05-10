<?php
require_once 'bdd.php';

$sql = "SELECT * FROM Section";
$requete = $bdd->query($sql);
$sections = $requete->fetchAll();

$sql2 = "SELECT idClasse, nomClasse FROM Classe";
$requete2 = $bdd->query($sql2);
$classes = $requete2->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main">
        <div class="box">
            <h1>Inscription</h1>
            <form action="postAjouterEtudiant.php" method="POST">
                <div class="unInput">
                    <input for="nameInput" type="text" name="nom" autocomplete="off" required>
                    <label>Nom</label>
                </div>
                <div class="unInput">
                    <input for="nameInput" type="text" name="prenom" autocomplete="off" required>
                    <label>Prénom</label>
                </div>
                <SELECT name="selectNiveau">
                    <?php
                     foreach ($sections as $section) : ?>
                    <option value="<?php echo $section["idSection"] ?>">
                        <?php
                        echo $section["libelleSection"]
                        ?>
                    </option>
                    <?php endforeach; ?>
                </SELECT>
                <br><br>
                <SELECT name="selectClasse">
                    <?php
                    foreach ($classes as $classe) : ?>
                    <option value="<?php echo $classe["idClasse"] ?>">
                        <?php
                        echo $classe["nomClasse"]
                        ?>
                    </option>
                    <?php endforeach; ?>
                </SELECT>


                <br><br>
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