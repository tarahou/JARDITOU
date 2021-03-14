var word = window.prompt('Saisir un mot :').toLowerCase();
var wordLength = word.length;
var count = 0;

for (i = 0; i < wordLength; i++) {
    switch (word[i]) {
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
        case 'y':

            count++;
            break;
        default:
            ' ';
    }
}
alert('Nombre de voyelle dans le mot ' + word + ' : ' + count);