/*
    *Funcion de operaciones aritmeticas
    *Autor: ALEX DC
    *Martes 14 de Mayo de 2024
*/
<?php
function areas($pfigura, $pbase, $paltura) {
    $figura = $pfigura;
    $base = $pbase;
    $altura = $paltura;
    $area = $base * $altura;
    if ($figura == 'cuadrado') {
        return $area;
    } else if ($figura == 'rectangulo') {
        return $area;
    } else if ($figura == 'triangulo') {
        $area /= 2;
        return $area;
    } else {
        return 'Figura no valida';
    }

}

function areasExp ($pfigura, $pbase, $paltura) {
    $figura = $pfigura;
    $base = $pbase;
    $altura = $paltura;
    $area = $base * $altura;
    if ($figura == 'cuadrado') {
        return $area;
    } else if ($figura == 'rectangulo') {
        return $area;
    } else if ($figura == 'triangulo') {
        $area /= 2;
        return $area;
    } else {
        return 'Figura no valida';
    }
}
?>