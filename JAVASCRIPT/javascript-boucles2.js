var nombre = parseInt(prompt("Entrez un nombre"));
var stockage = 0;

for (test = 1; test < nombre; test++) {
    stockage = stockage + "," + test
}
alert(stockage);