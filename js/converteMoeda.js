//variavel double
var numero=9.9;

//convertendo para string
var formatado=numero.toFixed(2);


var RS = "R$";


//concatenação de string
var numberFinal = RS + " " + numero;

numberFinal.replace(".",",");

document.write("Variavel formatada" + numberFinal);



//PROCESSO INVERSO

var str =  "R$ 120.35";

str.replace("R$ ", "");
document.write(str);


//COMPARAÇÕES

/*
var formatado= "R$ "+ numero.toFixed(2).replace ("." , ",");
var compativel = texto.replace ("R$" , "");
compativel= compativel.relace (",",".");
var valor=parseFloat (compativelComParseFloat);



function numberParaReal (numero){
var formatado= "R$ "+ numero.toFixed(2).replace ("." , ",");
}
Function realParaNumber(texto) {
var compativel = texto.replace ("R$" , "");
compativel= compativel.relace (",",".");
var valor=parseFloat (compativelComParseFloat);
}
*/

function numberParaReal (numero){
var formatado= "R$ "+ numero.toFixed(2).replace ("." , ",");
}
function realParaNumber(texto) {
var compativel = texto.replace ("R$" , "");
compativel= compativel.replace (",",".");
var valor=parseFloat (compativelComParseFloat);
}


var formatado=numberParaReal (9.9);
var numero=realParaNumber ("R$ 120.3");
console.log(formatado);
console.log(numero);
