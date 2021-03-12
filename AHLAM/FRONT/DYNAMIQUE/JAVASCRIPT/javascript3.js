const nb1 = Number(prompt('Premier nombre'));
const nb2 = Number(prompt('Deuxième nombre'));
let op = prompt('Opérateur');
if (nb2 == 0 && op == '/') {
    alert('division par 0');
} else {
    switch (op) {
        case '/':
            alert(nb1 / nb2);
            break;
        case '+':
            alert(nb1 + nb2);
            break;
        case '*':
            alert(nb1 * nb2);
            break;
        case '-':
            alert(nb1 - nb2);
            break;
        default:
            alert('Erreur');
    }
}