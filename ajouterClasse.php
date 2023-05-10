<?php
require_once "bdd.php";

$sql = "SELECT * FROM Section";
$requete = $bdd->query($sql);
$sections = $requete->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Nouvelle Classe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="box">
            <h1>Ajouter Classe</h1>
            <form  action="postAjouterClasse.php" method="POST">
                <div class="unInput">
                    <input for="nameInput" type="text" name="nom" autocomplete="off" required>
                    <label>Nom</label>
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
                <div class="connexion">
                    <input type="submit" value="Ajouter">
                </div>
            </form>
        </div>
    </div>
</body>

</html>