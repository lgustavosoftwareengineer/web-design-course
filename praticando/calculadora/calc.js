function botao( num ){
    var salvo = document.calc.visor.value;
    document.calc.visor.value = salvo + num;
}
function reset(){
    var salvo = document.calc.visor.value = "";
}
function calcule(){
    var salvo = document.calc.visor.value;
    var resul = eval(salvo)
    document.calc.visor.value = resul
}