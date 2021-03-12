let PU = windows.prompt('Prix unitaire');
let QTECOM = windows.prompt('Quantité commandée');
let TOT = PU * QTECOM;
let PORT = 0.02 * TOT;
let REM5 = TOT * 0.05;
let REM10 = TOT * 0.1;
let PAP = 0;

if (isNaN(PU && QTECOM)) {
    alert('Erreur, saisissez des nombres');

    if (TOT <= 200 && TOT >= 100) {




    } else {
        if (TOT > 500) {
            PAP = TOT - REM10;
            alert('Le prix à payer sera de ' + PAP + '€.');
        } else if (TOT > 200 && TOT <= 500) {

            if (port < 6) {
                tot = tot + port;
                tot = tot + 0.06;
                pap = tot;

            } else {
                PORT = 0.02 * TOT;
            }
            PAP = TOT - REM10 + PORT;
            alert('Le prix à payer sera de ' + PAP + '€.');
        } else if (TOT <= 200 && TOT >= 100) {
            PAP = TOT - REM5 + 0.06;
            alert('Le prix à payer sera de ' + PAP + '€.');
        } else {
            PAP = TOT + 0.06;
            alert('Le prix à payer sera de ' + PAP.toFixed(2) + '€.');
        }
    }