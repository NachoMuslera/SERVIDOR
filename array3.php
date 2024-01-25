<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $alumnoNotas=array(array(3.5,8.9,9.6),
                    array(4.6,7.8,9.5),
                    array(10,0,6));

    $numeroAprobado=0;
    $numeroSuspenso=0;
    for($fila=0;$fila<3;$fila++){
        for($columna=0;$columna<3;$columna++){
            if($alumnoNotas[$fila][$columna]>=5){
                $numeroAprobado++;
            }else{
                $numeroSuspenso++;
            }
        }
    }

                    for($fila=0;$fila<3;$fila++){
    for($columna=0;$columna<3;$columna++){
        echo "La nota del alumno en la fila ".($fila+1)." ha sacado en su nota "
        .($columna+1)." el valor ".$alumnoNotas[$fila][$columna]."<br>";
    }
}

echo"<br><br>Hay ".$numeroAprobado." aprobados y hay ".$numeroSuspenso." suspensos ";
    
    /*calcular la media de los alumnos

    calcular la media de cada alumno*/

    
    ?>
</body>
</html>