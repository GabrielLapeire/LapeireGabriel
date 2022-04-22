function suma (num1, num2) {
    let resultado = num1 + num2;
    console.log (resultado);
}
function suma1() {
    let num1 = Number(document.getElementById("a").value)
    let num2 = Number(document.getElementById("b").value)
    let resultado = num1 + num2
    console.log (resultado);
}
function mayor() {
    let num1 = Number(document.getElementById("a").value)
    let num2 = Number(document.getElementById("b").value)
    if (num1 > num2) {
        var resultado = num1;
        alert (`El valor mayor es ${resultado}`);
    } else {
        if (num1 == num2) {
            alert (`Ambos valores son iguales`);
        }else{
            var resultado = num2;
            alert (`El valor mayor es ${resultado}`);
        }
    }
}
function suma2() {
    let num1 = Number(document.getElementById("a").value)
    let num2 = Number(document.getElementById("b").value)
    let div = document.getElementById(`div`)
    let res = num1 + num2
    div.innerHTML = `Resultado: ${res}`
}