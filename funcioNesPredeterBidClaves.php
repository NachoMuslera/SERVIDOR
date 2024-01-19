<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$datosPersonas=array(
    array("nombre"=>"Rosa","estatura"=>168,"sexo"=>"f"),
    array("nombre"=>"Ignacio","estatura"=>175,"sexo"=>"m"),
    array("nombre"=>"Laura","estatura"=>178,"sexo"=>"f")
);

foreach($datosPersonas as $nombre=>$valor){
    foreach($valor as $clave=>$dato){
        echo "<br>{$clave}--{$dato}";
    }
}

echo "<br>**<br>";

// añadir un elemento al final
array_push($datosPersonas,array("nombre"=>"Ana","estatura"=>180,"sexo"=>"f"));

foreach($datosPersonas as $nombre=>$valor){
    foreach($valor as $clave=>$dato){
        echo "<br>{$clave}--{$dato}";
    }
}


echo "<br>**<br>";
// meter al principio
array_unshift($datosPersonas,array("nombre"=>"Manuel","estatura"=>175,"sexo"=>"m"));


foreach($datosPersonas as $nombre=>$valor){
    foreach($valor as $clave=>$dato){
        echo "<br>{$clave}--{$dato}";
    }
}

echo "<br>**<br>";
// quitar final
array_pop($datosPersonas);
foreach($datosPersonas as $nombre=>$valor){
    foreach($valor as $clave=>$dato){
        echo "<br>{$clave}--{$dato}";
    }
}

echo "<br>**<br>";
// quitar principio
array_shift($datosPersonas);
foreach($datosPersonas as $nombre=>$valor){
    foreach($valor as $clave=>$dato){
        echo "<br>{$clave}--{$dato}";
    }
}
echo "<br>**<br>";
// 
array_splice($datosPersonas,1,1,array("nombre"=>"Maria","estatura"=>173,"sexo"=>"f"));
foreach($datosPersonas as $nombre=>$valor){
    foreach($valor as $clave=>$dato){
        echo "<br>{$clave}--{$dato}";
    }
}

    ?>
</body>
</html>