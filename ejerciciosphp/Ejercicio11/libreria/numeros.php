/*
    *Funcion de operaciones aritmeticas
    *Autor: ALEX DC
    *Miercoles 15 de Mayo de 2024
*/
<?php
function numeros($pnum1, $pnum2) {
    $num1 = $pnum1;
    $num2 = $pnum2;
    if ($num1 == $num2) {
        return 'Son iguales';
    } else if ($num1 > $num2) {
        return `$num1 es mayor`;
    } else {
        return `$num2 es mayor`;
    }
}

function numerosExp ($pnum1, $pnum2) {
    $num1 = $pnum1;
    $num2 = $pnum2;
    if ($num1 == $num2) {
        return 'Son iguales';
    } else if ($num1 > $num2) {
        return `$num1 es mayor`;
    } else {
        return `$num2 es mayor`;
    }
}
?>