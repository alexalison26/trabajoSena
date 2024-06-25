<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AREAS</title>
</head>

<body>
<?php
        $cuad1 = $areas(3);
        $cuad2 = $areas(4);
        $cuad3 = $areas(2);
        if ($cuad1 == $cuad2 && $cuad2 == $cuad3 && $cuad3 == $cuad1) {
            var_dump('Son iguales');
        } else if ($cuad1 > $cuad2 && $cuad1 > $cuad3) {
            var_dump('El cuadrado 1 es mayor');
        } else if ($cuad2 > $cuad1 && $cuad2 > $cuad3) {
            var_dump('El cuadrado 2 es mayor');
        } else {
            var_dump('El cuadrado 3 es mayor');
        }
    ?>
</body>

</html>