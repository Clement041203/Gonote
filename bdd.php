<?php

try {
    $bdd = new PDO('mysql:host=mysql-gonote.alwaysdata.net;dbname=gonote_bdd2', 'gonote', 'Soniaetclem51');
} catch (PDOException $e) {
    die("Erreur lors de la connexion !: " . $e->getMessage()) . "<br/>";
}
