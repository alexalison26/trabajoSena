/*
    *Funcion saludo - Hola mundo
    *Autor: ALEX DC
    *Jueves 16 de Mayo de 2024
 */
<?php
 function Salario ($pdias, $pvdia) {
    $dia = $pdias;
    $vdia = $pvdia;
    '$totalSalario';
    $totalSalario = $pdias * $pvdia;
    return $totalSalario;
}

function subTrans ($pdias, $pvidas) {
    $salarioMinimo = 1600000;
    $salarioTrans = Salario($pdias, $pvidas);
    '$subTrasporte';
    if ($salarioTrans <= 2 * $salarioMinimo) {
        $subTrasporte = 114000;
    }
    else {
        $subTrasporte = 0;
    }
    return $subTrasporte;
}

function salud ($pdias, $pvidas) {
    '$pagosalud';
    $pagosalud = Salario($pdias, $pvidas) * 0.12;
    return $pagosalud;
}

function pension ($pdias, $pvidas) {
    '$pagopension';
    $pagopension = Salario($pdias, $pvidas) * 0.16;
    return $pagopension;
}

function arl ($pdias, $pvidas) {
    '$pagoarl';
    $pagoarl = Salario($pdias, $pvidas) * 0.052;
    return $pagoarl;
}

function deducibles ($pdias, $pvidas) {
    '$pagoDeducible';
    $pagoDeducible = salud($pdias, $pvidas) + pension($pdias, $pvidas,) + arl($pdias, $pvidas);
    return $pagoDeducible;
}

function pagoTotal ($pdias, $pvidas) {
    '$pagoSueldo';
    $pagoSueldo = Salario($pdias, $pvidas) + subTrans($pdias, $pvidas) - deducibles($pdias, $pvidas);
    return $pagoSueldo;
}
?>