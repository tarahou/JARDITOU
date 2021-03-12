var single = window.confirm('Êtes-vous célibataire?');
var salary = parseFloat(window.prompt('Indiquez votre salaire :'));
if (isNaN(salary)) {
    alert('Veuillez saisir un nombre valide svp!');
}
var children = window.prompt('Combien avez-vous d\'enfant?');
if (isNaN(children)) {
    alert('Veuillez saisir un nombre valide svp!');
}
var tot = 0;
switch (single) {
    case true:
        tot = tot + 25;
        tot = (tot + (children * 10));

        if (salary < 1200) {
            tot = tot + 10;
        }

        if (tot > 50) {
            tot = 50;
        }
        break;

    case false:
        tot = tot + 20;
        tot = (tot + (children * 10));

        if (salary < 1200) {
            tot = tot + 10;
        }

        if (tot > 50) {
            tot = 50;
        }
        break;
}

alert('La participation patronnale sera de ' + tot + '%');