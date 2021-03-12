var firstname = '';
var count = 1;
do {
    firstname = window.prompt('Saisissez le prénom N° ' + count + '\n ou click sur Annuler pour arréter la saisie.');

    if (firstname != null && firstname != '') {
        console.log('Prénom N° ' + count + ': ' + firstname);
        count++;
    }

} while (firstname != null && firstname != '');