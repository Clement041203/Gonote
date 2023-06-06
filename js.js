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
  var welcome = document.getElementById("welcome");
  var historique = document.getElementById("historique");

  if (texte1.style.display === "none") {
    texte1.style.display = "block";
    texte2.style.display = "none";
    matiere.style.display = "none";
    classe.style.display = "none";
    welcome.style.display = "none";
    historique.style.display = "none";
  }
}

function changerProf() {
  var texte1 = document.getElementById("texte1");
  var texte2 = document.getElementById("texte2");
  var matiere = document.getElementById("matiere");
  var classe = document.getElementById("classe");
  var welcome = document.getElementById("welcome");
  var historique = document.getElementById("historique");

  if (texte2.style.display === "none") {
    texte1.style.display = "none";
    texte2.style.display = "block";
    matiere.style.display = "none";
    classe.style.display = "none";
    welcome.style.display = "none";
    historique.style.display = "none";
  }
}

function matiere() {
  var matiere = document.getElementById("matiere");
  var texte1 = document.getElementById("texte1");
  var texte2 = document.getElementById("texte2");
  var classe = document.getElementById("classe");
  var welcome = document.getElementById("welcome");
  var historique = document.getElementById("historique");

  if (matiere.style.display === "none") {
    texte1.style.display = "none";
    texte2.style.display = "none";
    matiere.style.display = "block";
    classe.style.display = "none";
    welcome.style.display = "none";
    historique.style.display = "none";
  }
}

function classe() {
  var classe = document.getElementById("classe");
  var matiere = document.getElementById("matiere");
  var texte1 = document.getElementById("texte1");
  var texte2 = document.getElementById("texte2");
  var welcome = document.getElementById("welcome");
  var historique = document.getElementById("historique");

  if (classe.style.display === "none") {
    texte1.style.display = "none";
    texte2.style.display = "none";
    matiere.style.display = "none";
    classe.style.display = "block";
    welcome.style.display = "none";
    historique.style.display = "none";
  }
}

function historique() {
  var historique = document.getElementById("historique");
  var classe = document.getElementById("classe");
  var matiere = document.getElementById("matiere");
  var texte1 = document.getElementById("texte1");
  var texte2 = document.getElementById("texte2");
  var welcome = document.getElementById("welcome");

  if (historique.style.display === "none") {
    texte1.style.display = "none";
    texte2.style.display = "none";
    matiere.style.display = "none";
    historique.style.display = "block";
    welcome.style.display = "none";
    classe.style.display = "none";
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
