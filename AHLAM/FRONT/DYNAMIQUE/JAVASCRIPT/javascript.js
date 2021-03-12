let listeEl = document.querySelector("article > ul.important > li")

console.log(listeEl.nextElementSibling);

var lastName = prompt('Entrez votre nom :');
var firstname = prompt('Entrez votre prénom :');
var gender = window.confirm('Êtes-vous un homme?');
if (gender == true) {
    gender = 'Monsieur';
} else {
    gender = 'Madame';
}

alert('Bonjour ' + gender + ' ' + lastName + ' ' + firstname + '.' + '\n' + 'Bienvenue sur notre site!');