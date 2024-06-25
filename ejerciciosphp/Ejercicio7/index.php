<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AREAS</title>
</head>

<body>
<?php
        $area1 = areas('Cuadrado', 2, 2);
        $area2 = areas('Rectangulo', 3, 2);
        $area3 = areasExp('Triangulo', 3, 8);
        //console.log("Cuadrado: " + area1 + '\nRectangulo: ' + area2 + '\nTriangulo: ' + area3);
        var_dump(`Cuadrado: $area1 \nRectangulo: $area2 \nTriangulo: $area3`);
    ?>
</body>

</html>