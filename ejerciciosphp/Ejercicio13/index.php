<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDADES</title>
</head>

<body>
<?php
        $edad1 = $edades(1999, 2024);
        $edad2 = $edades(2018, 2024);
        $edad3 = $edades(2007, 2024);
        $prom = ($edad1 + $edad2 + $edad3) / 3;
        if ($prom > 17) {
            var_dump('El promedio cumple con la mayoria de edad');
        } else {
            var_dump('El promedio no cumple con la mayoria de edad');
        }
    ?>
</body>

</html>