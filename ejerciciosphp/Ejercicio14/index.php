<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGO</title>
</head>

<body>
<?php
        $valorDia=160000;
        $dias=30;
        $SalarioPersona = Salario($dias,$valorDia);
        $TotalpagarPersona = pagoTotal($dias,$valorDia);
        $SubTransPersona = subTrans($dias, $valorDia);


        var_dump("Salario Persona: "+$SalarioPersona);
        var_dump("Subsidio TransPersona: "+$SubTransPersona);
        var_dump("Total Pagar: "+$TotalpagarPersona);
    ?>
</body>

</html>