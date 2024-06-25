/*
    *Funcion saludo - Hola mundo
    *Autor: ALEX DC
    *Lunes 16 de abril de 2024
 */
const Salario = function (pdias, pvdia) {
    let dia = pdias;
    let vdia = pvdia;
    let totalSalario;
    totalSalario = pdias * pvdia;
    return totalSalario;
}

const subTrans = function (pdias, pvidas) {
    let salarioMinimo = 1600000;
    let salarioTrans = Salario(pdias, pvidas);
    let subTrasporte;
    if (salarioTrans <= 2 * salarioMinimo) {
        subTrasporte = 114000;
    }
    else {
        subTrasporte = 0;
    }
    return subTrasporte;
}

const salud = function (pdias, pvidas) {
    let pagosalud;
    pagosalud = Salario(pdias, pvidas) * 0.12;
    return pagosalud;
}

const pension = function (pdias, pvidas) {
    let pagopension;
    pagopension = Salario(pdias, pvidas) * 0.16;
    return pagopension;
}

const arl = function (pdias, pvidas) {
    let pagoarl;
    pagoarl = Salario(pdias, pvidas) * 0.052;
    return pagoarl;
}

const deducibles = function (pdias, pvidas) {
    let pagoDeducible;
    pagoDeducible = salud(pdias, pvidas) + pension(pdias, pvidas,) + arl(pdias, pvidas);
    return pagoDeducible;
}

const pagoTotal = function (pdias, pvidas) {
    let pagoSueldo;
    pagoSueldo = Salario(pdias, pvidas) + subTrans(pdias, pvidas) - deducibles(pdias, pvidas);
    return pagoSueldo;
}