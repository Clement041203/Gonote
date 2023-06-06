<?php
require_once 'bdd.php';
$id = htmlspecialchars($_GET['idMatiere']);
$sql = "SELECT * FROM Matiere
WHERE idMatiere = ". $id;
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
            <h1>Modifier la matiere</h1>
            <form action="modifierMatiere.php" method="POST">
            <div class="unInput" style="display:none;">
                    <input for="nameInput" type="text" name="id" 
                    value="<?php foreach ($editer as $edite) {
                        echo $edite['idMatiere'];
                    } ?>" autocomplete="off" required>
                    <label>Id</label>
                </div>
                <div class="unInput">
                    <input for="nameInput" type="text" name="nom" 
                    value="<?php foreach ($editer as $edite) {
                        echo $edite['nomMatiere'];
                    } ?>" autocomplete="off" required>
                    <label>Nom</label>
                </div>
                <div class="connexion">
                    <input type="submit" value="Modifier">
                </div>
            </form>
        </div>
    </div>
</body>

</html>