!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
</head>
<body>
    <?php

    //Tenemos un array asociativo de 5 empleados con su sueldo. Necesitamos mostrar el sueldo máximo. Y mostrar los empleados que tengan un salario mayor que la media. Sueldo máximo 3450 Juan 2300 Ana 2900

    $sueldoEmpleados =["Iñaki"=>1200, "Zaira"=>3000, "Adri"=>1900, "Manuel"=>800, "Laura"=>2500];
    $sueldoMax = 0;
    $totalSalario = 0;


    foreach($sueldoEmpleados as $nombreEmpleado=>$sueldo){
        if ($sueldoMax < $sueldo){
            $sueldoMax = $sueldo;
        }
    }

    echo "El mayor sueldo es ".$sueldoMax." euros <br>";


    foreach($sueldoEmpleados as $nombreEmpleado=>$sueldo){
        $totalSalario+=$sueldo;
    }

    $media = $totalSalario/count($sueldoEmpleados);
    echo "La media es ".$media." euros <br>";


    // foreach($sueldoEmpleados as $nombreEmpleado=>$sueldo){
    //     if ($sueldo>$media){
    //         echo $nombreEmpleado." cobra ".$sueldo." euros <br>";
    //     }
    // }

    foreach($sueldoEmpleados as $empleado => $sueldo){
        if($sueldo > $media){
            if($i < count($sueldoEmpleados) - 2){
                echo $empleado.", ";

            }else if($i == count($sueldoEmpleados) - 2){
                echo $empleado." y ";
            }
            else{
                echo $empleado." tienen un sueldo mayor a la media<br>";
            }
        }
        $i++;
    }

    ?>
</body>
</html>