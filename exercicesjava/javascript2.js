var dob = window.prompt('Année de naissance');
var today = new Date();
var currentYear = today.getFullYear();
var age = currentYear - dob;

if (age < 18) {
    alert('Vous êtes mineur: Vous avez ' + age + 'ans.');
} else {
    alert('Vous êtes majeur: Vous avez ' + age + 'ans.');
}