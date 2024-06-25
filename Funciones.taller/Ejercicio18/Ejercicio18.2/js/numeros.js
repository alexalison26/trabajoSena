/*
    *Funcion de operaciones aritmeticas
    *Autor: ALEX DC
    *Lunes 08 de Abril de 2024
*/

function numeros(pnumFin) {
    let numFin = pnumFin;
    let result;
    for (let cont = 1; cont <= numFin; cont++) {
        result = numFin * cont;
        console.log(`${numFin} * ${cont} = ${result}`);
    }
    return 'Fin';
}

const numerosExp = function (pnumFin) {
    let numFin = pnumFin;
    let result;
    for (let cont = 1; cont <= numFin; cont++) {
        result = numFin * cont;
        console.log(`${numFin} * ${cont} = ${result}`);
    }
    return 'Fin';
}