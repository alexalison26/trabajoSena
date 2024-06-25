/*
    *Funcion de operaciones aritmeticas
    *Autor: ALEX DC
    *Lunes 08 de Abril de 2024
*/

function edades(panoNa, panoAc) {
    let anoNa = panoNa;
    let anoAc = panoAc;
    let edad = anoAc - anoNa;
    if (edad > 17) {
        return 'Mayor de edad';
    } else {
        return 'Menor de edad';
    }
}
const edadesExp = function (panoNa, panoAc) {
    let anoNa = panoNa;
    let anoAc = panoAc;
    let edad = anoAc - anoNa;
    if (edad > 17) {
        return 'Mayor de edad';
    } else {
        return 'Menor de edad';
    }
}