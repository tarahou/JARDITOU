var PU = parseFloat(prompt('Prix unitaire'));
var QTECOM = parseInt(prompt('Quantité commandée'));
var TOT = PU * QTECOM;
var PORT = 0.02 * TOT;
var REM5 = TOT * 0.05;
var REM10 = TOT * 0.1;
var PAP = 0;

if (isNaN(PU && QTECOM)) {
    alert('Erreur, saisissez des nombres');
} else {

    if (TOT > 500) {
        PAP = TOT - REM10;
        alert('Le prix à payer sera de ' + PAP + '€.');
    } else if (TOT > 200 && TOT <= 500) {
        if (PORT < 6) {
            PORT = 6;
        } else {
            PORT = 0.02 * TOT;
        }
        PAP = TOT - REM10 + PORT;
        alert('Le prix à payer sera de ' + PAP + '€.');
    } else if (TOT <= 200 && TOT >= 100) {
        PAP = TOT - REM5 + 6;
        alert('Le prix à payer sera de ' + PAP + '€.');
    } else {
        PAP = TOT + 6;
        alert('Le prix à payer sera de ' + PAP.toFixed(2) + '€.');
    }
}