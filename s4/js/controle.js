/*alert(" Every little thing is going to be alright !  ");
confirm('Confirmation ');


var nom = prompt("Donner votre ??");

alert(nom);

//console.log(nom); affichage dans le console 


document.write(nom + 'kioua');

*/


/*Number()/eval()*/


/*var x = 10;
var y = 9;

document.write("La somme de " + x + "+" + y + " = " + (x + y) + "<br>" +
    "La soustraction de " + x + "-" + y + " = " + eval(x - y) + "<br>" +
    "La multiplication  de " + x + "*" + y + " = " + eval(x * y) + "<br/>");

var a = prompt("Donner A : ");
var b = prompt("Donner B : ");

function somme(a, b) {
    x = eval(a);
    y = eval(b);
    value = x + y;


    return (value);

}
function soustraction(a, b) {
    x = eval(a);
    y = eval(b);
    value = x - y;


    return (value);
}
*/
function multiplication(a, b) {

    value = x * y;


    return (value);

}
/*
document.write(somme(a, b) + "<br/>");
document.write(soustraction(a, b) + "<br/>");
document.write(multiplication(a, b) + "<br/>");
*/

/*var alpha = prompt("Donner a");
var beta = prompt("Donner b")
function verif(a) {
    while (isNaN(a)) {
        var x = prompt("Donner un Numéro Correcte");
        if (isNaN(x) == false) {
            break;
        }
    }
    return (x);
}



if (verif(alpha) || verif(beta)) {
    console.log(multiplication(alpha, beta));

}
*/

function verif() {

    var nom = document.inscriptionform.Nom.value;
    var le = nom.length;
    var prenom = document.inscriptionform.Prenom.value;
    p = prenom.length;
    if (le == 0) {
        
        
        var div = document.getElementById("abc");
        div.classList.add("alert","alert-danger");
        div.append("le nom est obli");
        return false;
    }
    return false;
}
    /*if (p == 0) {
alert("le prenom est obligatoire");
return false;


}
Nom.toUpperCase()
for (i = 0; i < le; i++) {

if (Nom.charCodeAt(i) < 91) {
    console.log(Nom.charCodeAt(i));
    return false;

}



}



return false;
}*/

