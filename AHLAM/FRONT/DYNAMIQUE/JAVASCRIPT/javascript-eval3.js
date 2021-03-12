var tab = ["audrey", "aurelien", "flavien", "jeremy", "laurent", "melik", "nouara", "salem", "samuel", "stephane"];
var saisie = window.prompt("Veuillez choisir un prénom " + tab);
if (tab.includes(saisie)) {
    tab.splice(tab.indexOf(Saisie), 1);
    tab.push(" ");
    console.write(tab);
} else {
    alert("Try again!");
}