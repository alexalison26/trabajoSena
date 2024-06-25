/*
    *Funcion de operaciones aritmeticas
    *Autor: ALEX DC
    *Jueves 16 de Mayo de 2024
*/
<?php
function numeros($pnum1, $pnum2) {
    $num1 = $pnum1;
    $num2 = $pnum2;
    $cont = 0;
    '$result';
    while ($cont < $num2) {
        $cont += 1;
        $result = $num1 * $cont;
        if ($result % 2 == 0) {
            var_dump(`$result es par`);
        } else {
            var_dump(`$result es impar`);
        }
    }
}

function numerosExp  ($pnum1, $pnum2) {
    $num1 = $pnum1;
    $num2 = $pnum2;
    $cont = 0;
    '$result';
    while ($cont < $num2) {
        $cont += 1;
        $result = $num1 * $cont;
        if ($result % 2 == 0) {
            var_dump(`$result es par`);
        } else {
            var_dump(`$result es impar`);
        }
    }
}
?>