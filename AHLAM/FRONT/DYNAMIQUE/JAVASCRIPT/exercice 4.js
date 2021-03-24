let pu = parseFloat(window.prompt("Entrer le prix unitaire"))
let qtecom = parseFloat(window.prompt("Entrer la quantité"))
let tot = pu * qtecom
let remise = 0
let port = 2
let pap = 0
let calport = 0
let reduc = 0
let total = 0
if (qtecom > 0) {

    if (tot >= 100 && tot <= 200) // si tot est compris entre 100 et 200 euro on donne donc une reduction de 5% sinon payera plein pot plus frais de port 
    {
        remise = 5
    } else if (tot > 200 && tot < 500) //si montant supérieur à 200 mais inférieur à 500 remise 10% mais frais de port 2%
    {
        remise = 10
    } else if (tot >= 500) //si supérieur à 500 € du coup cadeau les frais de port + remise de 10%
    {
        remise = 10
        port = 0
    }

    if (port != 0) {
        calport = total * port / 100 // on calcule le montant du port

        if (calport < 6 && port == 2) //si calport est inférieur à 6€ et que port est de 2% du coup on applique le tarif minimum du port
        {
            calport = 6
        }

    } else {
        calport = 0 //si le port est de 0% du coup on donne 0€ comme port
    }
    reduc = tot * remise / 100 //on calcul la reduction
    total = parseFloat(tot) - parseFloat(reduc) //total moins reduction
        // rajouté si prix 1 euro nombre 0 pas bon

    pap = parseFloat(total) + parseFloat(calport) //total à payer
    document.write("remise " + remise + "% soit -" + reduc + "€ soit " + total + "€ et frais de port " + port + "% soit " + calport + "€ Total à payer " + pap + "€")

} else {
    //la condition que la quantité n'est pas égal à zero
    document.write("vous ne pouvez pas saisir " + qtecom + " produit recommencez ya une erreur")

}