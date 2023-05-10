window.onload = function () {
  if (window.location.href.indexOf("#texte2") !== -1) {
    var element = document.getElementById("texte2");
    element.style.display = "block";
    var texte1 = document.getElementById("texte1");
    texte1.style.display = "none";
  }
};

window.onload = function () {
  if (window.location.href.indexOf("#matiere") !== -1) {
    var texte1 = document.getElementById("texte1");
    texte1.style.display = "none";
    var matiere = document.getElementById("matiere");
    matiere.style.display = "block";
  }
};

window.onload = function () {
  if (window.location.href.indexOf("#classe") !== -1) {
    var texte1 = document.getElementById("texte1");
    texte1.style.display = "none";
    var classe = document.getElementById("classe");
    classe.style.display = "block";
  }
};

function changerTexte() {
  var texte1 = document.getElementById("texte1");
  var texte2 = document.getElementById("texte2");
  var matiere = document.getElementById("matiere");
  var classe = document.getElementById("classe");

  if (texte1.style.display === "none") {
    texte1.style.display = "block";
    texte2.style.display = "none";
    matiere.style.display = "none";
    classe.style.display = "none";
  }
}

function changerProf() {
  var texte1 = document.getElementById("texte1");
  var texte2 = document.getElementById("texte2");
  var matiere = document.getElementById("matiere");
  var classe = document.getElementById("classe");

  if (texte2.style.display === "none") {
    texte1.style.display = "none";
    texte2.style.display = "block";
    matiere.style.display = "none";
    classe.style.display = "none";
  }
}

function matiere() {
  var matiere = document.getElementById("matiere");
  var texte1 = document.getElementById("texte1");
  var texte2 = document.getElementById("texte2");
  var classe = document.getElementById("classe");

  if (texte2.style.display === "block" || texte1.style.display === "block") {
    texte1.style.display = "none";
    texte2.style.display = "none";
    matiere.style.display = "block";
    classe.style.display = "none";
  }
}

function classe() {
  var classe = document.getElementById("classe");
  var matiere = document.getElementById("matiere");
  var texte1 = document.getElementById("texte1");
  var texte2 = document.getElementById("texte2");

  if (
    texte2.style.display === "block" ||
    texte1.style.display === "block" ||
    matiere.style.display === "block"
  ) {
    texte1.style.display = "none";
    texte2.style.display = "none";
    matiere.style.display = "none";
    classe.style.display = "block";
  }
}
