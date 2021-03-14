var tab = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stéphane"];
var prenom = window.prompt("saisir le prenom recherché");
console.log(tab);

for(var i=0; i<=tab.length; i++)//parcourir la longueur du tableau 
{
    if(prenom==tab[i])
    {
        tab.splice(tab.indexOf(prenom),1);// supprimer le prenom par son index prenom saisi et le 1 veut dire on supp un seul a partir de cette position
    }
}
tab.push(" ");//supprimer le dernnier element du tableau 
console.log(tab);