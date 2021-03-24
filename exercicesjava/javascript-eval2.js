// début
var control = /^[0-9]+$/;

function TableMultiplication() {
    var result = 0;
    var i = 0;
    var tab = [];
    var X = prompt("Entrez le nombre correspondant à la table de multiplication souhaité");

    if (X == null) {
        window.close();
    } else {
        X = parseInt(X);
        if (!controle.test(X)) {
            alert("Il faut entrer un nombre \n Recommencez !");
            window.location.reload(TableMultiplication());
        }
        while (i <= 10) {
            res = i * X;
            tab[i] = (i + " x " + X + " = " + res + "\n");
            i++;
        }
        if (tab != 0) {
            tab = tab.join("");
            alert(tab);
        }

        if (confirm("Voulez vous recommencer ?") == true) {
            window.location.reload(TableMultiplication());
        }
    }
}