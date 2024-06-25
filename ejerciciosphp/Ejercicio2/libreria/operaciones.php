/*
    *Funcion de operaciones aritmeticas
    *Autor: ALEX DC
    *Martes 14 de Mayo de 2024
*/
<?php
function suma($pnum1, $pnum2) {
    $num1 = $pnum1;
    $num2 = $pnum2;
    $sumar = $num1 + $num2;
    return $sumar;
}

function resta($pnum1, $pnum2) {
    $num1 = $pnum1;
    $num2 = $pnum2;
    $restar = $num1 - $num2;
    return $restar;
}

function multiplicacion($pnum1, $pnum2) {
    $num1 = $pnum1;
    $num2 = $pnum2;
    $multiplicar = $num1 * $num2;
    return $multiplicar;
}

function division($pnum1, $pnum2) {
    $num1 = $pnum1;
    $num2 = $pnum2;
    $dividir = $num1 / $num2;
    return $dividir;
}
?>