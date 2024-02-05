<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media</title>
</head>
<body>
<?php 
    $array1 = [15, 25, 18, 30, 22, 28, 35, 19, 24, 20];
    $array2 = [27, 14, 32, 21, 26, 29, 23, 17, 31, 14];

    function calcularEstadisticas($array) {
        $total = 0;
        $max = $min = $array[0];

        foreach($array as $valor){
            $total += $valor;

            if($valor < $min){
                $min = $valor;
            }

            if($valor > $max){
                $max = $valor;
            }
        }

        return [
            'media' => $total / count($array),
            'maximo' => $max,
            'minimo' => $min
        ];
    }

    $estadisticasArray1 = calcularEstadisticas($array1);
    $estadisticasArray2 = calcularEstadisticas($array2);

    echo "Array1: <br>";
    echo "La media es ".$estadisticasArray1['media']."<br>";
    echo "El máximo es ".$estadisticasArray1['maximo']." y el mínimo es ".$estadisticasArray1['minimo']."<br>";
    echo "**************<br>";

    echo "Array2: <br>";
    echo "La media es ".$estadisticasArray2['media']."<br>";
    echo "El máximo es ".$estadisticasArray2['maximo']." y el mínimo es ".$estadisticasArray2['minimo']."<br>";
    echo "**************<br>";

    $arrayCombinado = array_merge($array1, $array2);
    $estadisticasArrayCombinado = calcularEstadisticas($arrayCombinado);

    echo "Arrays combinados: <br>";
    echo "La media es ".$estadisticasArrayCombinado['media']."<br>";
    echo "El máximo es ".$estadisticasArrayCombinado['maximo']." y el mínimo es ".$estadisticasArrayCombinado['minimo']."<br>";
?>
</body>
</html>