<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usaint Bolt</title>
</head>
<body>
<?php 
    $atletas=[
        "Manuel"=>["corto"=>9,"medio"=>17,"largaDistancia"=>37],
        "Moises"=>["corto"=>10,"medio"=>28,"largaDistancia"=>41],
        "Josefina"=>["corto"=>15,"medio"=>25,"largaDistancia"=>37]

    ];
    $totalCorto=0;
    $totalMedio=0;
    $totalLargaDistancia=0;
    

    foreach($atletas as $nombre=>$datos){
        echo "<br> {$nombre} <br>";
        foreach($datos as $tipo=>$valor){
            echo " {$tipo}=>{$valor}";
        }
    }
    echo "<br>***********<br>";
    foreach($atletismo as $nombre=>$datos){
        $mediaTiempo=0;
        foreach($datos as $tipo=>$valor){
            $mediaTiempo+=$valor;
        }
        echo "La media de tiempo de ".$nombre." es de ".($mediaTiempo/count($datos))."<br>";
    }

    
    echo "<br>***********<br>";


    foreach($atletas as $nombre=>$datos){
        foreach($datos as $tipo=>$valor){
            if($tipo=="corto"){
                $totalCorto+=$valor;
            }
        }
    }
    echo "<br>La media de la distancia corta es ".($totalCorto/count($atletas));

    echo "<br>***********<br>";
    foreach($atletas as $nombre=>$datos){
        foreach($datos as $tipo=>$valor){
            if($tipo=="medio"){
                $totalMedio+=$valor;
            }
        }
    }
    echo "<br>La media de la distancia media es ".($totalMedio/count($atletas));

    echo "<br>***********<br>";
    foreach($atletas as $nombre=>$datos){
        foreach($datos as $tipo=>$valor){
            if($tipo=="largaDistancia"){
                $totalLargaDistancia+=$valor;
            }
        }
    }
    echo "<br>La media de la larga distancia es ".($totalLargaDistancia/count($atletas));
    ?>
</body>
</html>