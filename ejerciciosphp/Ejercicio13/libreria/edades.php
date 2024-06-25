/*
    *Funcion de operaciones aritmeticas
    *Autor: ALEX DC
    *Miercoles 15 Mayo de 2024
*/
<?php

$num = 1;
function edades($panoNa, $panoAc) {
    $anoNa = $panoNa;
    $anoAc = $panoAc;
    $edad = $anoAc - $anoNa;
    if ($edad > 17) {
        var_dump('La persona'.$GLOBALS['num1'].' es mayor de edad');
    } else {
        var_dump('La persona '.$GLOBALS['num1'].' es menor de edad');
    }
    $GLOBALS['num1'] += 1;
    return $edad;
}

function edadesExp ($panoNa, $panoAc) {
    $anoNa = $panoNa;
    $anoAc = $panoAc;
    $edad = $anoAc - $anoNa;
    if ($edad > 17) {
        var_dump('La persona'. $GLOBALS['num1'].' es mayor de edad');
    } else {
        var_dump('La persona'.$GLOBALS['num1'].' es menor de edad');
    }
    $GLOBALS['num1'] += 1;
    return $edad;
}