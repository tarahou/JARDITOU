var pu = parseFloat(prompt('Entrez le prix unitaire'));
var qtecom = parseInt(prompt('Entrez la quantité à commander'));
var tot = pu * qtecom;
var pap = 0;
var rem = 0;
var port = 0;
console.log(tot) if (tot > 100 && tot <
    200) { rem = (tot * 5) / 100;
    console.log(rem) tot = t ot - rem;
    alert('Vous avez une remise de 5%') }
if (tot > 200) { rem = (tot * 10) / 100;
    console.log(rem) tot = tot - rem;
    alert('Vous avez une remise de 10%') }
if (tot > 500) { pap = tot alert('Le frais du port est gratuit') }
port = (tot * 2) / 100;
if (tot <
    500) { if (port > 6) { tot = tot + port;
        pap = tot; } else { tot = tot + 6 pap = tot; }
    document.write(pap);