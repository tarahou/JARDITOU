var nbr = 1;
var moyenne = 0;
var sum = 0;
var nb_notes = 0;

while (nbr != 0) {
    nbr = parseInt(window.prompt("Saisissez un nombre"));
    sum += nbr;
    nb_notes++;
}
moyenne = sum / (nb_notes - 1);
alert("Somme : " + sum + ", Moyenne : " + moyenne);