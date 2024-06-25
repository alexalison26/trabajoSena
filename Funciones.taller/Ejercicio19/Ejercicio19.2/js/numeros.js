/*
    *Funcion de operaciones aritmeticas
    *Autor: ALEX DC
    *Lunes 08 de Abril de 2024
*/

function numeros(pnum1, pnum2) {
    let num1 = pnum1;
    let num2 = pnum2;
    let result;
    for (let cont = 1; cont <= num2; cont++) {
        result = num1 * cont;
        if (result % 2 == 0) {
            console.log(`${result} es par`);
        } else {
            console.log(`${result} es impar`);
        }
    }
}

const numerosExp = function (pnum1, pnum2) {
    let num1 = pnum1;
    let num2 = pnum2;
    let result;
    for (let cont = 1; cont <= num2; cont++) {
        result = num1 * cont;
        if (result % 2 == 0) {
            console.log(`${result} es par`);
        } else {
            console.log(`${result} es impar`);
        }
    }
}