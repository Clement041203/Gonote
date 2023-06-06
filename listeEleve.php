<?php
require_once "bdd.php";
?>

<div style="display:none;" id="eleve2" class="eleve">Eleves de Seconde 2
    <div class="prof">
      <br>
      <?php echo "<table class='liste'><thead><tr><th>Nom</th></tr></thead>";

      echo "<tbody>";
      // Boucle pour parcourir les données et les afficher dans des <tr>
      foreach ($eleveSecondeB as $eleveEncours) {
        echo "<tr><td>" . $eleveEncours["nomUtilisateur"] . " " . $eleveEncours["prenomUtilisateur"] . "</td></tr>";
      }
      echo "</tbody>";
      echo "</table>";
      ?>
    </div>
  </div>

  <div style="display:none;" id="eleve3" class="eleve">Eleves de Seconde 3
    <div class="prof">
      <br>
      <?php echo "<table class='liste'><thead><tr><th>Nom</th></tr></thead>";

      echo "<tbody>";
      // Boucle pour parcourir les données et les afficher dans des <tr>
      foreach ($eleveSecondeC as $eleveEncours) {
        echo "<tr><td>" . $eleveEncours["nomUtilisateur"] . " " . $eleveEncours["prenomUtilisateur"] . "</td></tr>";
      }
      echo "</tbody>";
      echo "</table>";
      ?>
    </div>
  </div>

  <div style="display:none;" id="eleve4" class="eleve">Eleves de Premiere 1
    <div class="prof">
      <br>
      <?php echo "<table class='liste'><thead><tr><th>Nom</th></tr></thead>";

      echo "<tbody>";
      // Boucle pour parcourir les données et les afficher dans des <tr>
      foreach ($elevePremiereA as $eleveEncours) {
        echo "<tr><td>" . $eleveEncours["nomUtilisateur"] . " " . $eleveEncours["prenomUtilisateur"] . "</td></tr>";
      }
      echo "</tbody>";
      echo "</table>";
      ?>
    </div>
  </div>

  <div style="display:none;" id="eleve5" class="eleve">Eleves de Premiere 2
    <div class="prof">
      <br>
      <?php echo "<table class='liste'><thead><tr><th>Nom</th></tr></thead>";

      echo "<tbody>";
      // Boucle pour parcourir les données et les afficher dans des <tr>
      foreach ($elevePremiereB as $eleveEncours) {
        echo "<tr><td>" . $eleveEncours["nomUtilisateur"] . " " . $eleveEncours["prenomUtilisateur"] . "</td></tr>";
      }
      echo "</tbody>";
      echo "</table>";
      ?>
    </div>
  </div>
  <div style="display:none;" id="eleve6" class="eleve">Eleves de Premiere 3
    <div class="prof">
      <br>
      <?php echo "<table class='liste'><thead><tr><th>Nom</th></tr></thead>";

      echo "<tbody>";
      // Boucle pour parcourir les données et les afficher dans des <tr>
      foreach ($elevePremiereC as $eleveEncours) {
        echo "<tr><td>" . $eleveEncours["nomUtilisateur"] . " " . $eleveEncours["prenomUtilisateur"] . "</td></tr>";
      }
      echo "</tbody>";
      echo "</table>";
      ?>
    </div>
  </div>
  <div style="display:none;" id="eleve7" class="eleve">Eleves de Terminale 1
    <div class="prof">
      <br>
      <?php echo "<table class='liste'><thead><tr><th>Nom</th></tr></thead>";

      echo "<tbody>";
      // Boucle pour parcourir les données et les afficher dans des <tr>
      foreach ($eleveTerminaleA as $eleveEncours) {
        echo "<tr><td>" . $eleveEncours["nomUtilisateur"] . " " . $eleveEncours["prenomUtilisateur"] . "</td></tr>";
      }
      echo "</tbody>";
      echo "</table>";
      ?>
    </div>
  </div>
  <div style="display:none;" id="eleve8" class="eleve">Eleves de Terminale 2
    <div class="prof">
      <br>
      <?php echo "<table class='liste'><thead><tr><th>Nom</th></tr></thead>";

      echo "<tbody>";
      // Boucle pour parcourir les données et les afficher dans des <tr>
      foreach ($eleveTerminaleB as $eleveEncours) {
        echo "<tr><td>" . $eleveEncours["nomUtilisateur"] . " " . $eleveEncours["prenomUtilisateur"] . "</td></tr>";
      }
      echo "</tbody>";
      echo "</table>";
      ?>
    </div>
  </div>
  <div style="display:none;" id="eleve9" class="eleve">Eleves de Terminale 3
    <div class="prof">
      <br>
      <?php echo "<table class='liste'><thead><tr><th>Nom</th></tr></thead>";

      echo "<tbody>";
      // Boucle pour parcourir les données et les afficher dans des <tr>
      foreach ($eleveTerminaleC as $eleveEncours) {
        echo "<tr><td>" . $eleveEncours["nomUtilisateur"] . " " . $eleveEncours["prenomUtilisateur"] . "</td></tr>";
      }
      echo "</tbody>";
      echo "</table>";
      ?>
    </div>
  </div>
  <div style="display:none;" id="eleve10" class="eleve">Eleves de Miage 1
    <div class="prof">
      <br>
      <?php echo "<table class='liste'><thead><tr><th>Nom</th></tr></thead>";

      echo "<tbody>";
      // Boucle pour parcourir les données et les afficher dans des <tr>
      foreach ($eleveMiageA as $eleveEncours) {
        echo "<tr><td>" . $eleveEncours["nomUtilisateur"] . " " . $eleveEncours["prenomUtilisateur"] . "</td></tr>";
      }
      echo "</tbody>";
      echo "</table>";
      ?>
    </div>
  </div>
  <div style="display:none;" id="eleve11" class="eleve">Eleves de Miage 2
    <div class="prof">
      <br>
      <?php echo "<table class='liste'><thead><tr><th>Nom</th></tr></thead>";

      echo "<tbody>";
      // Boucle pour parcourir les données et les afficher dans des <tr>
      foreach ($eleveMiageB as $eleveEncours) {
        echo "<tr><td>" . $eleveEncours["nomUtilisateur"] . " " . $eleveEncours["prenomUtilisateur"] . "</td></tr>";
      }
      echo "</tbody>";
      echo "</table>";
      ?>
    </div>
  </div>
  <div style="display:none;" id="eleve12" class="eleve">Eleves de Miage 3
    <div class="prof">
      <br>
      <?php echo "<table class='liste'><thead><tr><th>Nom</th></tr></thead>";

      echo "<tbody>";
      // Boucle pour parcourir les données et les afficher dans des <tr>
      foreach ($eleveMiageC as $eleveEncours) {
        echo "<tr><td>" . $eleveEncours["nomUtilisateur"] . " " . $eleveEncours["prenomUtilisateur"] . "</td></tr>";
      }
      echo "</tbody>";
      echo "</table>";
      ?>
    </div>
  </div>
  <div style="display:none;" id="eleve13" class="eleve">Eleves de Miage 4
    <div class="prof">
      <br>
      <?php echo "<table class='liste'><thead><tr><th>Nom</th></tr></thead>";

      echo "<tbody>";
      // Boucle pour parcourir les données et les afficher dans des <tr>
      foreach ($eleveMiageD as $eleveEncours) {
        echo "<tr><td>" . $eleveEncours["nomUtilisateur"] . " " . $eleveEncours["prenomUtilisateur"] . "</td></tr>";
      }
      echo "</tbody>";
      echo "</table>";
      ?>
    </div>
  </div>
  <div style="display:none;" id="eleve14" class="eleve">Eleves de Miage 5
    <div class="prof">
      <br>
      <?php echo "<table class='liste'><thead><tr><th>Nom</th></tr></thead>";

      echo "<tbody>";
      // Boucle pour parcourir les données et les afficher dans des <tr>
      foreach ($eleveMiageE as $eleveEncours) {
        echo "<tr><td>" . $eleveEncours["nomUtilisateur"] . " " . $eleveEncours["prenomUtilisateur"] . "</td></tr>";
      }
      echo "</tbody>";
      echo "</table>";
      ?>
    </div>
  </div>
  <div style="display:none;" id="eleve15" class="eleve">Eleves de Mathématique 1
    <div class="prof">
      <br>
      <?php echo "<table class='liste'><thead><tr><th>Nom</th></tr></thead>";

      echo "<tbody>";
      // Boucle pour parcourir les données et les afficher dans des <tr>
      foreach ($eleveMathA as $eleveEncours) {
        echo "<tr><td>" . $eleveEncours["nomUtilisateur"] . " " . $eleveEncours["prenomUtilisateur"] . "</td></tr>";
      }
      echo "</tbody>";
      echo "</table>";
      ?>
    </div>
  </div>
  <div style="display:none;" id="eleve16" class="eleve">Eleves de Mathématique 2
    <div class="prof">
      <br>
      <?php echo "<table class='liste'><thead><tr><th>Nom</th></tr></thead>";

      echo "<tbody>";
      // Boucle pour parcourir les données et les afficher dans des <tr>
      foreach ($eleveMathB as $eleveEncours) {
        echo "<tr><td>" . $eleveEncours["nomUtilisateur"] . " " . $eleveEncours["prenomUtilisateur"] . "</td></tr>";
      }
      echo "</tbody>";
      echo "</table>";
      ?>
    </div>
  </div>
  <div style="display:none;" id="eleve17" class="eleve">Eleves de Mathématique 3
    <div class="prof">
      <br>
      <?php echo "<table class='liste'><thead><tr><th>Nom</th></tr></thead>";

      echo "<tbody>";
      // Boucle pour parcourir les données et les afficher dans des <tr>
      foreach ($eleveMathC as $eleveEncours) {
        echo "<tr><td>" . $eleveEncours["nomUtilisateur"] . " " . $eleveEncours["prenomUtilisateur"] . "</td></tr>";
      }
      echo "</tbody>";
      echo "</table>";
      ?>
    </div>
  </div>
  <div style="display:none;" id="eleve18" class="eleve">Eleves de Mathématique 4
    <div class="prof">
      <br>
      <?php echo "<table class='liste'><thead><tr><th>Nom</th></tr></thead>";

      echo "<tbody>";
      // Boucle pour parcourir les données et les afficher dans des <tr>
      foreach ($eleveMathD as $eleveEncours) {
        echo "<tr><td>" . $eleveEncours["nomUtilisateur"] . " " . $eleveEncours["prenomUtilisateur"] . "</td></tr>";
      }
      echo "</tbody>";
      echo "</table>";
      ?>
    </div>
  </div>
  <div style="display:none;" id="eleve19" class="eleve">Eleves de Mathématique 5
    <div class="prof">
      <br>
      <?php echo "<table class='liste'><thead><tr><th>Nom</th></tr></thead>";

      echo "<tbody>";
      // Boucle pour parcourir les données et les afficher dans des <tr>
      foreach ($eleveMathE as $eleveEncours) {
        echo "<tr><td>" . $eleveEncours["nomUtilisateur"] . " " . $eleveEncours["prenomUtilisateur"] . "</td></tr>";
      }
      echo "</tbody>";
      echo "</table>";
      ?>
    </div>
  </div>
</div>
