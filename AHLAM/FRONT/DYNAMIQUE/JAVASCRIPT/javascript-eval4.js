let PU = window.prompt("Saisissez le prix unitaire : ");
let QTECOM = window.prompt("Saisissez la quantité a commandée : ");
let TOT = PU * QTECOM;
let REM = 0;
let PORT = 0;
let B = 0;
let A = 0;
// Remise de 5% .......................
if (TOT >= 100 && TOT <= 200) {
    REM = TOT * 5 / 100;
    B = 0.5;
    // Pas de remise 0 % .............................   
} else if (TOT < 100) {
    REM = 0;
    // Remise de 10% .......................   
} else {
    REM = TOT * 10 / 100;
    B = 0.1;
}
let x = TOT - REM;
if (x > 500) {
    PORT = 0;
    A = 0;
} else {
    PORT = x * 2 / 100;
    A = 0.02;
    //"6€ (frais minimum à payer)"...............
    if (PORT < 6) {
        PORT = 6;
    } else {
        PORT = 0;
    }
}
let PAP = x + PORT;
console.log(PORT);
// Résultat .............................................
document.write("* A PAYER : " + TOT + " - " + REM + " +" + PORT + " = " + PAP + "<br/>");
document.write("* LA REMISE  :" + TOT + " * " + B + " =  " + REM + "<br/>");
document.write("* LES FRAIS DU PORT : " + PORT);