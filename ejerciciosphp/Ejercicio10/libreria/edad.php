/*
    *Funcion de operaciones aritmeticas
    *Autor: ALEX DC
    *Miercoles 15 de Mayo de 2024
*/
<?php
function edades($panoNa, $panoAc) {
    $anoNa = $panoNa;
    $anoAc = $panoAc;
    $edad = $anoAc - $anoNa;
    if ($edad > 17) {
        return 'Mayor de edad';
    } else {
        return 'Menor de edad';
    }
}
function edadesExp ($panoNa, $panoAc) {
    $anoNa = $panoNa;
    $anoAc = $panoAc;
    $edad = $anoAc - $anoNa;
    if ($edad > 17) {
        return 'Mayor de edad';
    } else {
        return 'Menor de edad';
    }
}
?>