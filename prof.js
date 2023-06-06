function devoir() {
  var devoir = document.getElementById("AjouterDevoir");
  var note = document.getElementById("ajouterNote");
  var welcome = document.getElementById("welcome");

  if (devoir.style.display === "none") {
    devoir.style.display = "block";
    note.style.display = "none";
    welcome.style.display = "none";
  }
}

function afficherDevoir() {
  var selectElement = document.getElementById("classeSelect");
  var form = document.getElementById("form");

  if (selectElement.value !== "") {
    form.style.display = "block";
  } else {
    form.style.display = "none";
  }
  console.log(selectElement.value);
}

function note() {
  var ajouterNote = document.getElementById("ajouterNote");
  var devoir = document.getElementById("AjouterDevoir");
  var welcome = document.getElementById("welcome");

  if (ajouterNote.style.display === "none") {
    ajouterNote.style.display = "block";
    devoir.style.display = "none";
    welcome.style.display = "none";
  }
}

function afficherDevoirNote() {
  var classeSelect = document.getElementById("classeSelectNote");
  var selectDevoirM1 = document.getElementById("devoirSelectM1");
  var selectDevoirM2 = document.getElementById("devoirSelectM2");
  var selectDevoirM3 = document.getElementById("devoirSelectM3");
  var selectDevoirM4 = document.getElementById("devoirSelectM4");
  var selectDevoirM5 = document.getElementById("devoirSelectM5");
  var selectEleveM1 = document.getElementById("eleveSelectM1");
  var selectEleveM2 = document.getElementById("eleveSelectM2");
  var selectEleveM3 = document.getElementById("eleveSelectM3");
  var selectEleveM4 = document.getElementById("eleveSelectM4");
  var selectEleveM5 = document.getElementById("eleveSelectM5");

  var selectDevoirMathM1 = document.getElementById("devoirMathSelectM1");
  var selectDevoirMathM2 = document.getElementById("devoirMathSelectM2");
  var selectDevoirMathM3 = document.getElementById("devoirMathSelectM3");
  var selectDevoirMathM4 = document.getElementById("devoirMathSelectM4");
  var selectDevoirMathM5 = document.getElementById("devoirMathSelectM5");
  var selectEleveMathM1 = document.getElementById("eleveMathSelectM1");
  var selectEleveMathM2 = document.getElementById("eleveMathSelectM2");
  var selectEleveMathM3 = document.getElementById("eleveMathSelectM3");
  var selectEleveMathM4 = document.getElementById("eleveMathSelectM4");
  var selectEleveMathM5 = document.getElementById("eleveMathSelectM5");
  var numberInput = document.getElementById("numberInput");
  var envoie = document.getElementById("envoie");

  if (classeSelect.value == 1) {
    selectDevoirM1.style.display = "block";
    selectEleveM1.style.display = "block";
    numberInput.style.display = "block";
    envoie.style.display = "block";
    selectDevoirM2.removeAttribute("name");
    selectDevoirM3.removeAttribute("name");
    selectDevoirM4.removeAttribute("name");
    selectDevoirM5.removeAttribute("name");
    selectEleveM2.removeAttribute("name");
    selectEleveM3.removeAttribute("name");
    selectEleveM4.removeAttribute("name");
    selectEleveM5.removeAttribute("name");
    selectDevoirMathM1.removeAttribute("name");
    selectDevoirMathM2.removeAttribute("name");
    selectDevoirMathM3.removeAttribute("name");
    selectDevoirMathM4.removeAttribute("name");
    selectDevoirMathM5.removeAttribute("name");
    selectEleveMathM1.removeAttribute("name");
    selectEleveMathM2.removeAttribute("name");
    selectEleveMathM3.removeAttribute("name");
    selectEleveMathM4.removeAttribute("name");
    selectEleveMathM5.removeAttribute("name");
    selectDevoirM2.style.display = "none";
    selectEleveM2.style.display = "none";
    selectDevoirM3.style.display = "none";
    selectEleveM3.style.display = "none";
    selectDevoirM4.style.display = "none";
    selectEleveM4.style.display = "none";
    selectDevoirM5.style.display = "none";
    selectEleveM5.style.display = "none";
  } else if (classeSelect.value == 2) {
    selectDevoirM1.removeAttribute("name");
    selectDevoirM3.removeAttribute("name");
    selectDevoirM4.removeAttribute("name");
    selectDevoirM5.removeAttribute("name");
    selectEleveM1.removeAttribute("name");
    selectEleveM3.removeAttribute("name");
    selectEleveM4.removeAttribute("name");
    selectEleveM5.removeAttribute("name");
    selectDevoirMathM1.removeAttribute("name");
    selectDevoirMathM2.removeAttribute("name");
    selectDevoirMathM3.removeAttribute("name");
    selectDevoirMathM4.removeAttribute("name");
    selectDevoirMathM5.removeAttribute("name");
    selectEleveMathM1.removeAttribute("name");
    selectEleveMathM2.removeAttribute("name");
    selectEleveMathM3.removeAttribute("name");
    selectEleveMathM4.removeAttribute("name");
    selectEleveMathM5.removeAttribute("name");
    selectDevoirM2.style.display = "block";
    selectEleveM2.style.display = "block";
    numberInput.style.display = "block";
    envoie.style.display = "block";
    selectDevoirM1.style.display = "none";
    selectEleveM1.style.display = "none";
    selectDevoirM3.style.display = "none";
    selectEleveM3.style.display = "none";
    selectDevoirM4.style.display = "none";
    selectEleveM4.style.display = "none";
    selectDevoirM5.style.display = "none";
    selectEleveM5.style.display = "none";
  } else if (classeSelect.value == 3) {
    selectDevoirM1.removeAttribute("name");
    selectDevoirM2.removeAttribute("name");
    selectDevoirM4.removeAttribute("name");
    selectDevoirM5.removeAttribute("name");
    selectEleveM1.removeAttribute("name");
    selectEleveM2.removeAttribute("name");
    selectEleveM4.removeAttribute("name");
    selectEleveM5.removeAttribute("name");
    selectDevoirMathM1.removeAttribute("name");
    selectDevoirMathM2.removeAttribute("name");
    selectDevoirMathM3.removeAttribute("name");
    selectDevoirMathM4.removeAttribute("name");
    selectDevoirMathM5.removeAttribute("name");
    selectEleveMathM1.removeAttribute("name");
    selectEleveMathM2.removeAttribute("name");
    selectEleveMathM3.removeAttribute("name");
    selectEleveMathM4.removeAttribute("name");
    selectEleveMathM5.removeAttribute("name");
    selectDevoirM3.style.display = "block";
    selectEleveM3.style.display = "block";
    numberInput.style.display = "block";
    envoie.style.display = "block";
    selectDevoirM2.style.display = "none";
    selectEleveM2.style.display = "none";
    selectDevoirM2.style.display = "none";
    selectEleveM2.style.display = "none";
    selectDevoirM4.style.display = "none";
    selectEleveM4.style.display = "none";
    selectDevoirM5.style.display = "none";
    selectEleveM5.style.display = "none";
  } else if (classeSelect.value == 4) {
    selectDevoirM1.removeAttribute("name");
    selectDevoirM2.removeAttribute("name");
    selectDevoirM3.removeAttribute("name");
    selectDevoirM5.removeAttribute("name");
    selectEleveM1.removeAttribute("name");
    selectEleveM2.removeAttribute("name");
    selectEleveM3.removeAttribute("name");
    selectEleveM5.removeAttribute("name");
    selectDevoirMathM1.removeAttribute("name");
    selectDevoirMathM2.removeAttribute("name");
    selectDevoirMathM3.removeAttribute("name");
    selectDevoirMathM4.removeAttribute("name");
    selectDevoirMathM5.removeAttribute("name");
    selectEleveMathM1.removeAttribute("name");
    selectEleveMathM2.removeAttribute("name");
    selectEleveMathM3.removeAttribute("name");
    selectEleveMathM4.removeAttribute("name");
    selectEleveMathM5.removeAttribute("name");
    selectDevoirM4.style.display = "block";
    selectEleveM4.style.display = "block";
    numberInput.style.display = "block";
    envoie.style.display = "block";
    selectDevoirM3.style.display = "none";
    selectEleveM3.style.display = "none";
    selectDevoirM2.style.display = "none";
    selectEleveM2.style.display = "none";
    selectDevoirM3.style.display = "none";
    selectEleveM3.style.display = "none";
    selectDevoirM5.style.display = "none";
    selectEleveM5.style.display = "none";
  } else if (classeSelect.value == 5) {
    selectDevoirM1.removeAttribute("name");
    selectDevoirM2.removeAttribute("name");
    selectDevoirM3.removeAttribute("name");
    selectDevoirM4.removeAttribute("name");
    selectEleveM1.removeAttribute("name");
    selectEleveM2.removeAttribute("name");
    selectEleveM3.removeAttribute("name");
    selectEleveM4.removeAttribute("name");
    selectDevoirMathM1.removeAttribute("name");
    selectDevoirMathM2.removeAttribute("name");
    selectDevoirMathM3.removeAttribute("name");
    selectDevoirMathM4.removeAttribute("name");
    selectDevoirMathM5.removeAttribute("name");
    selectEleveMathM1.removeAttribute("name");
    selectEleveMathM2.removeAttribute("name");
    selectEleveMathM3.removeAttribute("name");
    selectEleveMathM4.removeAttribute("name");
    selectEleveMathM5.removeAttribute("name");
    selectDevoirM5.style.display = "block";
    selectEleveM5.style.display = "block";
    numberInput.style.display = "block";
    envoie.style.display = "block";
    selectDevoirM4.style.display = "none";
    selectEleveM4.style.display = "none";
    selectDevoirM2.style.display = "none";
    selectEleveM2.style.display = "none";
    selectDevoirM3.style.display = "none";
    selectEleveM3.style.display = "none";
    selectDevoirM4.style.display = "none";
    selectEleveM4.style.display = "none";
  } else if (classeSelect.value == 6) {
    selectDevoirMathM1.style.display = "block";
    selectEleveMathM1.style.display = "block";
    numberInput.style.display = "block";
    envoie.style.display = "block";
    selectDevoirMathM2.removeAttribute("name");
    selectDevoirMathM3.removeAttribute("name");
    selectDevoirMathM4.removeAttribute("name");
    selectDevoirMathM5.removeAttribute("name");
    selectEleveMathM2.removeAttribute("name");
    selectEleveMathM3.removeAttribute("name");
    selectEleveMathM4.removeAttribute("name");
    selectEleveMathM5.removeAttribute("name");
    selectDevoirMathM2.style.display = "none";
    selectEleveMathM2.style.display = "none";
    selectDevoirMathM3.style.display = "none";
    selectEleveMathM3.style.display = "none";
    selectDevoirMathM4.style.display = "none";
    selectEleveMathM4.style.display = "none";
    selectDevoirMathM5.style.display = "none";
    selectEleveMathM5.style.display = "none";
  } else if (classeSelect.value == 7) {
    selectDevoirMathM2.style.display = "block";
    selectEleveMathM2.style.display = "block";
    numberInput.style.display = "block";
    envoie.style.display = "block";
    selectDevoirMathM1.removeAttribute("name");
    selectDevoirMathM3.removeAttribute("name");
    selectDevoirMathM4.removeAttribute("name");
    selectDevoirMathM5.removeAttribute("name");
    selectEleveMathM1.removeAttribute("name");
    selectEleveMathM3.removeAttribute("name");
    selectEleveMathM4.removeAttribute("name");
    selectEleveMathM5.removeAttribute("name");
    selectDevoirMathM1.style.display = "none";
    selectEleveMathM1.style.display = "none";
    selectDevoirMathM3.style.display = "none";
    selectEleveMathM3.style.display = "none";
    selectDevoirMathM4.style.display = "none";
    selectEleveMathM4.style.display = "none";
    selectDevoirMathM5.style.display = "none";
    selectEleveMathM5.style.display = "none";
  } else if (classeSelect.value == 8) {
    selectDevoirMathM3.style.display = "block";
    selectEleveMathM3.style.display = "block";
    numberInput.style.display = "block";
    envoie.style.display = "block";
    selectDevoirMathM1.removeAttribute("name");
    selectDevoirMathM2.removeAttribute("name");
    selectDevoirMathM4.removeAttribute("name");
    selectDevoirMathM5.removeAttribute("name");
    selectEleveMathM2.removeAttribute("name");
    selectEleveMathM1.removeAttribute("name");
    selectEleveMathM4.removeAttribute("name");
    selectEleveMathM5.removeAttribute("name");
    selectDevoirMathM2.style.display = "none";
    selectEleveMathM2.style.display = "none";
    selectDevoirMathM1.style.display = "none";
    selectEleveMathM1.style.display = "none";
    selectDevoirMathM4.style.display = "none";
    selectEleveMathM4.style.display = "none";
    selectDevoirMathM5.style.display = "none";
    selectEleveMathM5.style.display = "none";
  } else if (classeSelect.value == 9) {
    selectDevoirMathM4.style.display = "block";
    selectEleveMathM4.style.display = "block";
    numberInput.style.display = "block";
    envoie.style.display = "block";
    selectDevoirMathM2.removeAttribute("name");
    selectDevoirMathM3.removeAttribute("name");
    selectDevoirMathM1.removeAttribute("name");
    selectDevoirMathM5.removeAttribute("name");
    selectEleveMathM2.removeAttribute("name");
    selectEleveMathM3.removeAttribute("name");
    selectEleveMathM4.removeAttribute("name");
    selectEleveMathM5.removeAttribute("name");
    selectDevoirMathM2.style.display = "none";
    selectEleveMathM2.style.display = "none";
    selectDevoirMathM3.style.display = "none";
    selectEleveMathM3.style.display = "none";
    selectDevoirMathM1.style.display = "none";
    selectEleveMathM1.style.display = "none";
    selectDevoirMathM5.style.display = "none";
    selectEleveMathM5.style.display = "none";
  } else if (classeSelect.value == 10) {
    selectDevoirMathM5.style.display = "block";
    selectEleveMathM5.style.display = "block";
    numberInput.style.display = "block";
    envoie.style.display = "block";
    selectDevoirMathM2.removeAttribute("name");
    selectDevoirMathM3.removeAttribute("name");
    selectDevoirMathM4.removeAttribute("name");
    selectDevoirMathM1.removeAttribute("name");
    selectEleveMathM2.removeAttribute("name");
    selectEleveMathM3.removeAttribute("name");
    selectEleveMathM4.removeAttribute("name");
    selectEleveMathM1.removeAttribute("name");
    selectDevoirMathM2.style.display = "none";
    selectEleveMathM2.style.display = "none";
    selectDevoirMathM3.style.display = "none";
    selectEleveMathM3.style.display = "none";
    selectDevoirMathM4.style.display = "none";
    selectEleveMathM4.style.display = "none";
    selectDevoirMathM1.style.display = "none";
    selectEleveMathM1.style.display = "none";
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
