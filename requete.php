<?php
$sql1 = "SELECT Eleve.nomUtilisateur, Eleve.prenomUtilisateur FROM Eleve
INNER JOIN Classe on Classe.idClasse = Eleve.idClasse
WHERE Classe.nomClasse = 'S1'";
$requete = $bdd->query($sql1);
$eleveSecondeA = $requete->fetchAll();

$sql2 = "SELECT Eleve.nomUtilisateur, Eleve.prenomUtilisateur FROM Eleve
INNER JOIN Classe on Classe.idClasse = Eleve.idClasse
WHERE Classe.nomClasse = 'S2'";
$requete = $bdd->query($sql2);
$eleveSecondeB = $requete->fetchAll();

$sql3 = "SELECT Eleve.nomUtilisateur, Eleve.prenomUtilisateur FROM Eleve
INNER JOIN Classe on Classe.idClasse = Eleve.idClasse
WHERE Classe.nomClasse = 'S3'";
$requete = $bdd->query($sql3);
$eleveSecondeC = $requete->fetchAll();

$sql4 = "SELECT Eleve.nomUtilisateur, Eleve.prenomUtilisateur FROM Eleve
INNER JOIN Classe on Classe.idClasse = Eleve.idClasse
WHERE Classe.nomClasse = 'P1'";
$requete = $bdd->query($sql4);
$elevePremiereA = $requete->fetchAll();

$sql5 = "SELECT Eleve.nomUtilisateur, Eleve.prenomUtilisateur FROM Eleve
INNER JOIN Classe on Classe.idClasse = Eleve.idClasse
WHERE Classe.nomClasse = 'P2'";
$requete = $bdd->query($sql5);
$elevePremiereB = $requete->fetchAll();

$sql6 = "SELECT Eleve.nomUtilisateur, Eleve.prenomUtilisateur FROM Eleve
INNER JOIN Classe on Classe.idClasse = Eleve.idClasse
WHERE Classe.nomClasse = 'P3'";
$requete = $bdd->query($sql6);
$elevePremiereC = $requete->fetchAll();

$sql7 = "SELECT Eleve.nomUtilisateur, Eleve.prenomUtilisateur FROM Eleve
INNER JOIN Classe on Classe.idClasse = Eleve.idClasse
WHERE Classe.nomClasse = 'T1'";
$requete = $bdd->query($sql7);
$eleveTerminaleA = $requete->fetchAll();

$sql8 = "SELECT Eleve.nomUtilisateur, Eleve.prenomUtilisateur FROM Eleve
INNER JOIN Classe on Classe.idClasse = Eleve.idClasse
WHERE Classe.nomClasse = 'T2'";
$requete = $bdd->query($sql8);
$eleveTerminaleB = $requete->fetchAll();

$sql9 = "SELECT Eleve.nomUtilisateur, Eleve.prenomUtilisateur FROM Eleve
INNER JOIN Classe on Classe.idClasse = Eleve.idClasse
WHERE Classe.nomClasse = 'T3'";
$requete = $bdd->query($sql9);
$eleveTerminaleC = $requete->fetchAll();

$sql10 = "SELECT Eleve.nomUtilisateur, Eleve.prenomUtilisateur FROM Eleve
INNER JOIN Classe on Classe.idClasse = Eleve.idClasse
WHERE Classe.nomClasse = 'Miage 1'";
$requete = $bdd->query($sql10);
$eleveMiageA = $requete->fetchAll();

$sql11 = "SELECT Eleve.nomUtilisateur, Eleve.prenomUtilisateur FROM Eleve
INNER JOIN Classe on Classe.idClasse = Eleve.idClasse
WHERE Classe.nomClasse = 'Miage 2'";
$requete = $bdd->query($sql11);
$eleveMiageB = $requete->fetchAll();

$sql12 = "SELECT Eleve.nomUtilisateur, Eleve.prenomUtilisateur FROM Eleve
INNER JOIN Classe on Classe.idClasse = Eleve.idClasse
WHERE Classe.nomClasse = 'Miage 3'";
$requete = $bdd->query($sql12);
$eleveMiageC = $requete->fetchAll();

$sql13 = "SELECT Eleve.nomUtilisateur, Eleve.prenomUtilisateur FROM Eleve
INNER JOIN Classe on Classe.idClasse = Eleve.idClasse
WHERE Classe.nomClasse = 'Miage 4'";
$requete = $bdd->query($sql13);
$eleveMiageD = $requete->fetchAll();

$sql14 = "SELECT Eleve.nomUtilisateur, Eleve.prenomUtilisateur FROM Eleve
INNER JOIN Classe on Classe.idClasse = Eleve.idClasse
WHERE Classe.nomClasse = 'Miage 5'";
$requete = $bdd->query($sql14);
$eleveMiageE = $requete->fetchAll();

$sql15 = "SELECT Eleve.nomUtilisateur, Eleve.prenomUtilisateur FROM Eleve
INNER JOIN Classe on Classe.idClasse = Eleve.idClasse
WHERE Classe.nomClasse = 'Mathématique 1'";
$requete = $bdd->query($sql15);
$eleveMathA = $requete->fetchAll();

$sql16 = "SELECT Eleve.nomUtilisateur, Eleve.prenomUtilisateur FROM Eleve
INNER JOIN Classe on Classe.idClasse = Eleve.idClasse
WHERE Classe.nomClasse = 'Mathématique 2'";
$requete = $bdd->query($sql16);
$eleveMathB = $requete->fetchAll();

$sql17 = "SELECT Eleve.nomUtilisateur, Eleve.prenomUtilisateur FROM Eleve
INNER JOIN Classe on Classe.idClasse = Eleve.idClasse
WHERE Classe.nomClasse = 'Mathématique 3'";
$requete = $bdd->query($sql17);
$eleveMathC = $requete->fetchAll();

$sql18 = "SELECT Eleve.nomUtilisateur, Eleve.prenomUtilisateur FROM Eleve
INNER JOIN Classe on Classe.idClasse = Eleve.idClasse
WHERE Classe.nomClasse = 'Mathématique 4'";
$requete = $bdd->query($sql18);
$eleveMathD = $requete->fetchAll();

$sql19 = "SELECT Eleve.nomUtilisateur, Eleve.prenomUtilisateur FROM Eleve
INNER JOIN Classe on Classe.idClasse = Eleve.idClasse
WHERE Classe.nomClasse = 'Mathématique 5'";
$requete = $bdd->query($sql19);
$eleveMathE = $requete->fetchAll();
?>