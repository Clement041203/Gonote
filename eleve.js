function handleCheckboxChange(checkbox) {
  // Récupérer la ligne parente de la case à cocher
  var row = checkbox.parentNode.parentNode;

  // Récupérer tous les éléments enfants de la ligne, sauf la case à cocher
  var elements = row.querySelectorAll("td:not(:last-child)");

  // Appliquer le style CSS approprié en fonction de l'état de la case à cocher
  if (checkbox.checked) {
    elements.forEach(function (element) {
      element.style.display = "none"; // Masquer les éléments
    });
  } else {
    elements.forEach(function (element) {
      element.style.display = ""; // Rétablir l'affichage des éléments
    });
  }
}

function afficherDevoir() {
  var note = document.getElementById("note");
  var devoir = document.getElementById("devoir");
  var welcome = document.getElementById("welcome");

  if (devoir.style.display === "none") {
    note.style.display = "none";
    devoir.style.display = "block";
    welcome.style.display = "none";
  }
}

function afficherNote() {
  var note = document.getElementById("note");
  var devoir = document.getElementById("devoir");
  var welcome = document.getElementById("welcome");

  if (note.style.display === "none") {
    note.style.display = "block";
    devoir.style.display = "none";
    welcome.style.display = "none";
  }
}


window.onload = function () {
    var interface = document.getElementById("interface");
    var loader = document.getElementById("loader");
  
    setTimeout(function () {
      loader.style.display = "none";
      interface.style.display = "block";
    }, 500);
  };
  