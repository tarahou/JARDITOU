  //Je Déclare 3 tableau
  let âge = 0;
  var tabJ = new Array();
  var tabM = new Array();
  var tabV = new Array();

  while (âge < 100) {
      âge = window.prompt("Entrez un âge , le comptage est arrété à la saisie d'un centenaire.");


      if (âge < 20 && âge != null) {
          tabJ.push(âge);
          console.log(tabJ);
      } else if (âge > 40 && âge != null) {
          tabV.push(âge);
          console.log(tabV);
      } else if (âge >= 20 || âge <= 40 && âge != null) {
          tabM.push(âge);
          console.log(tabM);
      }
  }

  document.write("* les personnes d'âge strictement inférieur à 20 ans sont : " + tabJ.length + "<br/>");
  document.write("* les personnes d'âge strictement supérieur à 40 ans sont : " + tabV.length + "<br/>");
  document.write("* les personnes d'âge est compris entre 20 ans et 40 ans sont: " + tabM.length);