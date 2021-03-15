  //Je Déclare 3 tableau
  let âge = 0;
  var tabJ = new Array();
  var tabA = new Array();
  var tabS = new Array();

  while (âge < 100) {
      âge = window.prompt("Entrez un âge , le comptage est arrété à la saisie d'un centenaire.");


      if (âge < 20 && âge != null) {
          tabJ.push(âge);
          console.log(tabJ);
      } else if (âge > 40 && âge != null) {
          tabA.push(âge);
          console.log(tabA);
      } else if (âge >= 20 || âge <= 40 && âge != null) {
          tabS.push(âge);
          console.log(tabS);
      }
  }

  document.write("les personnes d'âge strictement inférieur à 20 ans sont : " + tabJ.length + "<br/>");
  document.write("les personnes d'âge strictement supérieur à 40 ans sont : " + tabA.length + "<br/>");
  document.write("les personnes d'âge est compris entre 20 ans et 40 ans sont: " + tabS.length);