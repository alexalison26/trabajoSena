/*
    *Funcion de operaciones aritmeticas
    *Autor: ALEX DC
    *Lunes 08 de Abril de 2024
*/

function numeros(pnumFin) {
    let numFin = pnumFin;
    let cont = 0;
    let result;
    while (cont < numFin) {
        cont += 1;
        result = numFin * cont;
        console.log(`${numFin} * ${cont} = ${result}`);
    }
    return 'Fin';
}

const numerosExp = function (pnumFin) {
    let numFin = pnumFin;
    let cont = 0;
    let result;
    while (cont < numFin) {
        cont += 1;
        result = numFin * cont;
        console.log(`${numFin} * ${cont} = ${result}`);
    }
    return 'Fin';
}