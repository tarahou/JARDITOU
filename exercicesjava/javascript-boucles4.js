var X = parseInt(window.prompt('Saisissez un nombre :'));
var N = parseInt(window.prompt('Saisissez le nombre de multiple :'));
var total = 0;

for (i = 0; i <= N; i++) {
    total = i * X;
}
alert(X + ' x ' + (i - 1) + ' = ' + total);