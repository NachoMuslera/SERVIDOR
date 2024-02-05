<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EjercicioDNI</title>
</head>
<body>
    <?php
    $personas = [

        "71735888S" => [
            "nombre" => "Ignacio",
            "apellido1" => "Muslera",
            "apellido2" => "Mosquera"
        ],

        "4567891P" => [
            "nombre" => "Dudu",
            "apellido1" => "Padre",
            "apellido2" => "Rap"
        ],

        "9876543K" => [
            "nombre" => "Eustaquio",
            "apellido1" => "Abichuela",
            "apellido2" => "González"
        ],

        "3332221J" => [
            "nombre" => "Julián",
            "apellido1" => "Álvarez",
            "apellido2" => "Pérez"
        ],

        "12345678L" => [
            "nombre" => "Manuel",
            "apellido1" => "Cortés",
            "apellido2" => "Rey"
        ],

        "77766692S" => [
            "nombre" => "Luffy",
            "apellido1" => "Monkey",
            "apellido2" => "D"
        ]
    ];
    
    foreach($personas as $clave=>$valor){
        echo "El DNI es ".$clave." y su nombre es ".$valor."<br>";
    }

    $posicion1=$agenda["77766692S"];
    $posicion2=$agenda["71735888S"];

    echo"La posicion 1 es ".$posicion1."<br>";
    echo"La posicion 2 es ".$posicion2."<br>";

?>
</body>
</html>