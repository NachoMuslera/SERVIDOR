<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $planetas=["marte","Tierra","Venus"];
    $ciudades=["OVIEDO","MIERES","LUANCO"];
    $datos="";
    $alumnos="JUAN-MARIA-LUIS-ANA";


    foreach($planetas as $nombre){
        echo $nombre."--";
    }

    echo "<br><br>";
    //reducir el tamaño del array array_slice

    $planetas=array_slice($planetas,0.3);

    foreach($planetas as $nombre){
        echo $nombre."--";
    }
/*
    //quitar ultimo elemento
    echo "<br><br>";
    array_pop($planetas);
    foreach($planetas as $nombre){
        echo $nombre."--";
    }
    // meter fin
    echo "<br><br>";
    array_push($planetas,"Saturno");
    array_push($planetas,"Neptuno");
    foreach($planetas as $nombre){
        echo $nombre."--";
    }

    // meter inicio
    echo "<br><br>";
    array_unshift($planetas,"Jupiter","Pluton");
    foreach($planetas as $nombre){
        echo $nombre."--";
    }

    // quitar inicio
    echo "<br><br>";
    array_shift($planetas);
    foreach($planetas as $nombre){
        echo $nombre."--";
    }

    echo "<br><br>";
    array_splice($planetas,1,1,"prueba");
    foreach($planetas as $nombre){
        echo $nombre."--";
    }


    echo "<br><br>";
    $planetas=array_merge($planetas,$ciudades);
    foreach($planetas as $nombre){
        echo $nombre."--";
    }

    echo "<br><br>";
    $datos=implode($planetas);
    echo $datos;

    //explode
    echo "<br><br>";
   $arrayAlumnos=explode("-",$alumnos);
   foreach($arrayAlumnos as $nombre){
        echo $nombre."--";
   }
*/
    ?>
</body>
</html>