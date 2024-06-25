/*
    *Funcion de operaciones aritmeticas
    *Autor: ALEX DC
    *Jueves  16  de Mayo de 2024
*/
<?php
function numeros($pnumFin) {
    $numFin = $pnumFin;
    for ($cont = 0; $cont <= $numFin; $cont++) {
        $cont = $cont + 1;
        if ($cont % 2 == 0) {
            var_dump(`$cont es par`);
        } else {
            var_dump(`$cont es impar`);
        }
    }
    return 'Fin';
}

function numerosExp ($pnumFin) {
    $numFin = $pnumFin;
    for ($cont = 0; $cont <= $numFin; $cont++) {
        $cont = $cont + 1;
        if ($cont % 2 == 0) {
            var_dump(`$cont es par`);
        } else {
            var_dump(`$cont es impar`);
        }
    }
    return 'Fin';
}