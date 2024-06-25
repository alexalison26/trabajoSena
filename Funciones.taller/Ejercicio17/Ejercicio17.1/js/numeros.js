/*
    *Funcion de operaciones aritmeticas
    *Autor: ALEX DC
    *Lunes 08 de Abril de 2024
*/

function numeros(pnumFin) {
    let numFin = pnumFin;
    let cont = 0;
    while (cont < numFin) {
        cont = cont + 1;
        if (cont % 2 == 0) {
            console.log(`${cont} es par`);
        } else {
            console.log(`${cont} es impar`);
        }
    }
    return 'Fin';
}

const numerosExp = function (pnumFin) {
    let numFin = pnumFin;
    let cont = 0;
    while (cont < numFin) {
        cont = cont + 1;
        if (cont % 2 == 0) {
            console.log(`${cont} es par`);
        } else {
            console.log(`${cont} es impar`);
        }
    }
    return 'Fin';
}