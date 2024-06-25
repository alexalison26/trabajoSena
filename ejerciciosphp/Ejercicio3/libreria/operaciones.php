/*
    *Funcion de operaciones aritmeticas
    *Autor: ALEX DC
    *Martes 14 de Mayo de 2024
*/
<?php
function operations($poperation, $pnum1, $pnum2) {
    $operation = $poperation;
    $num1 = $pnum1;
    $num2 = $pnum2;
    if ($operation == "suma" || $operation == '+') {
        $result = suma($num1, $num2);
    }
    else if ($operation == "resta" || $operation == '-') {
        $result = resta($num1, $num2);
    }
    else if ($operation == "multiplicacion" || $operation == '*' || $operation == 'x') {
        $result = multiplicacion($num1, $num2);
    }
    else if ($operation == "division" || $operation == '/') {
        $result = division($num1, $num2);
    }
    return $result;
}

function suma($pnum1, $pnum2) {
    $num1 = $pnum1;
    $num2 = $pnum2;
    $sumar = $num1 + $num2;
    return `Suma: $sumar`;
}

function resta($pnum1, $pnum2) {
    $num1 = $pnum1;
    $num2 = $pnum2;
    $restar = $num1 - $num2;
    return `Resta: $restar`;
}

function multiplicacion($pnum1, $pnum2) {
    $num1 = $pnum1;
    $num2 = $pnum2;
    $multiplicar = $num1 * $num2;
    return `Multiplicacion: $multiplicar`;
}

function division($pnum1, $pnum2) {
    $num1 = $pnum1;
    $num2 = $pnum2;
    $dividir = $num1 / $num2;
    return `Division: $dividir`;
}
function operationsExp($operation, $num1, $num2) {
    $operation = $operation;
    if ($operation == "suma" || $operation == '+') {
        $result = suma($num1,$num2);
    }
    else if ($operation == "resta" || $operation == '-') {
        $result = resta($num1, $num2);
    }
    else if ($operation == "multiplicacion" || $operation == '*' || $operation == 'x') {
        $result = multiplicacion($num1, $num2);
    }
    else if ($operation == "division" || $operation == '/') {
        $result = division($num1, $num2);
    }
    else {
        $result = 'Operacion no valida';
    }
    return $result;
}
 function sumaExp($num1, $num2) {
    $sumar = $num1 + $num2;
    return `Suma: $sumar`;
}

function restaExp ($num1, $num2) {
    $restar = $num1 - $num2;
    return `Resta: $restar`;
}

 function multiplicacionExp ($num1, $num2) {
    $multiplicar = $num1 * $num2;
    return `Multiplicacion: $multiplicar`;
}

 function divisionExp ($num1, $num2) {
    $dividir = $num1 / $num2;
    return `Division: $dividir`;
}
?>