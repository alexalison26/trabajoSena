/*
    *Funcion de operaciones aritmeticas
    *Autor: ALEX DC
    *Miercoles 15 de Mayo de 2024
*/
<?php
function salario($pdias, $pvalDias) {
    $dias = $pdias;
    $valDias = $pvalDias;
    $salario = $dias * $valDias;
    $salud = $salario * 0.12;
    $pension = $salario * 0.16;
    $arl = $salario * 0.052;
    $desc = $salud + $pension + $arl;
    $salario -= $desc;
    return $salario;
}

function salarioExp ($pdias, $pvalDias) {
    $dias = $pdias;
    $valDias = $pvalDias;
    $salario = $dias * $valDias;
    $salud = $salario * 0.12;
    $pension = $salario * 0.16;
    $arl = $salario * 0.052;
    $desc = $salud + $pension + $arl;
    $salario -= $desc;
    return $salario;
}
?>