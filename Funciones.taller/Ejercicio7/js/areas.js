/*
    *Funcion de operaciones aritmeticas
    *Autor: ALEX DC
    *Lunes 08 de Abril de 2024
*/

function areas(pfigura, pbase, paltura) {
    let figura = pfigura.toLowerCase();
    let base = pbase;
    let altura = paltura;
    let area;
    area = base * altura;
    if (figura == 'cuadrado') {
        return area;
    } else if (figura == 'rectangulo') {
        return area;
    } else if (figura == 'triangulo') {
        area /= 2;
        return area;
    } else {
        return 'Figura no valida';
    }

}

const areasExp = function (pfigura, pbase, paltura) {
    let figura = pfigura.toLowerCase();
    let base = pbase;
    let altura = paltura;
    let area;
    area = base * altura;
    if (figura == 'cuadrado') {
        return area;
    } else if (figura == 'rectangulo') {
        return area;
    } else if (figura == 'triangulo') {
        area /= 2;
        return area;
    } else {
        return 'Figura no valida';
    }
}