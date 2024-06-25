/*
    *Funcion de operaciones aritmeticas
    *Autor: ALEX DC
    *Lunes 08 de Abril de 2024
*/

let num = 1;

function edades(panoNa, panoAc) {
    let anoNa = panoNa;
    let anoAc = panoAc;
    let edad = anoAc - anoNa;
    if (edad > 17) {
        console.log(`La persona ${num} es mayor de edad`);
    } else {
        console.log(`La persona ${num} es menor de edad`);
    }
    num += 1;
    return edad;
}

const edadesExp = function (panoNa, panoAc) {
    let anoNa = panoNa;
    let anoAc = panoAc;
    let edad = anoAc - anoNa;
    if (edad > 17) {
        console.log(`La persona ${num} es mayor de edad`);
    } else {
        console.log(`La persona ${num} es menor de edad`);
    }
    num += 1;
    return edad;
}