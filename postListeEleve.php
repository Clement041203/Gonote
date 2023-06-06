<?php
require_once 'bdd.php';

$classe = $_POST['classe'];

$sql = 'SELECT nomUtilisateur FROM Eleve WHERE idClasse = :classe';
$stmt = $bdd->prepare($sql);
$stmt->bindParam(':classe', $classe);
$stmt->execute();

// Récupérer les résultats de la requête
$resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Générer le contenu HTML des élèves
$html = '<ul>';
foreach ($resultats as $eleve) {
  $html .= '<li>' . $eleve['nom'] . '</li>';
}
$html .= '</ul>';

// Renvoyer le contenu HTML des élèves à la requête AJAX
echo $html;
?>