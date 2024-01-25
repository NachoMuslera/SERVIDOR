<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /*
    *
    *
    Hacer una calculadora a traves de una function. La funcion recibira tres parametros
    -dos numeros
    -operador:"+,-;*,/. El parametro operador llevara un valor or defecto que sea la suma.

    -El function tendra que retornar el resultado de la operacion
    */

    function calculadora($numero1,$numero2, $operador = "+"){
        $resultado=0;
        switch ($operador){
            case "+":
                $resultado = $numero1 + $numero2;
                break;
            case "-":
                $resultado = $numero1 - $numero2;
                break;
                case "*":
                $resultado = $numero1 * $numero2;
                break;
            case "/":
                if($numero2 != 0) {
                    $resultado = $numero1 / $numero2;
                }
                break;
                default;
                
        }
            return $resultado;
    }

    echo "El resultado es ".calculadora(10,5,"+");
    echo "<br>************<br>";
    echo "El resultado es ".calculadora(10,5,"-");
    echo "<br>************<br>";
    echo "El resultado es ".calculadora(10,5,"*");
    echo "<br>************<br>";
    echo "El resultado es ".calculadora(10,5,"/");

    ?>
</body>
</html>