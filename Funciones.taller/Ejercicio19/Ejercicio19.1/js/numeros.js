/*
    *Funcion de operaciones aritmeticas
    *Autor: ALEX DC
    *Lunes 08 de Abril de 2024
*/

function numeros(pnum1, pnum2) {
    let num1 = pnum1;
    let num2 = pnum2;
    let cont = 0;
    let result;
    while (cont < num2) {
        cont += 1;
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
    let cont = 0;
    let result;
    while (cont < num2) {
        cont += 1;
        result = num1 * cont;
        if (result % 2 == 0) {
            console.log(`${result} es par`);
        } else {
            console.log(`${result} es impar`);
        }
    }
}