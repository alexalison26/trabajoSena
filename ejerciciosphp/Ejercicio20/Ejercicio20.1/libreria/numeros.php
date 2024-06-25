/*
    *Funcion de operaciones aritmeticas
    *Autor: ALEX DC
    *Viernes 17 de Mayo de 2024
*/
<?php
function numeros($pnum1, $pnum2) {
    $num1 = $pnum1;
    $num2 = $pnum2;
    $cont1 = 0;
    $contPar = 0;
    $contImpar = 0;
    '$result' .'$print';
    while ($cont1 < $num1) {
        $cont1 += 1;
        $cont2 = 0;
        while ($cont2 < $num2) {
            $cont2 += 1;
            $result = $cont1 * $cont2;
            $print = `$cont1 * $cont2 = $result `;
            if ($result % 2 == 0) {
                $print += 'buzz';
                $contPar += 1;
            } else {
                $print += 'bass';
                $contImpar += 1;
            }
            var_dump('print');
        }
    }
    var_dump(`Par: $contPar\nImpar: $contImpar`);
}

function numerosExp ($pnum1, $pnum2) {
    $num1 = $pnum1;
    $num2 = $pnum2;
    $cont1 = 0;
    $contPar = 0;
    $contImpar = 0;
    '$result' .'$print';
    while ($cont1 < $num1) {
        $cont1 += 1;
        $cont2 = 0;
        while ($cont2 < $num2) {
            $cont2 += 1;
            $result = $cont1 * $cont2;
            $print = `$cont1 * $cont2 = $result `;
            if ($result % 2 == 0) {
                $print += 'buzz';
                $contPar += 1;
            } else {
                $print += 'bass';
                $contImpar += 1;
            }
            var_dump($print);
        }
    }
    var_dump(`Par: $contPar\nImpar: $contImpar`);
}
?>