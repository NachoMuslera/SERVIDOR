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
        $alumno=array(
            array("nombre"=>"rosa","estatura"=>168,"sexo"=>"f"),
            array("nombre"=>"Ignacio","estatura"=>174,"sexo"=>"m"),
            array("nombre"=>"Daniel","estatura"=>174,"sexo"=>"m")
        );

        for($i=0;$i<count($alumno);$i++){
            echo " NOMBRE: ".$alumno[$i]["nombre"]."<br>";
            echo "ALTURA: ".$alumno[$i]["estatura"]."<br>";
            if($alumno[$i]["sexo"]="f"){
                echo "SEXO FEMININO <br>";
            }else{
                echo "SEXO MASCULINO <br>";
            }
        } */

        /* crear array 4 ciudades y 3 temperaturas mañana tarde y noche
        mostrar los datos y calcular la media de temperaturas*/

        $temperaturas=array(
            array("nombre"=>"Oviedo","mañana"=>8,"tarde"=>14,"noche"=>10),
            array("nombre"=>"Gijon","mañana"=>7,"tarde"=>16,"noche"=>9),
            array("nombre"=>"Mieres","mañana"=>6,"tarde"=>10,"noche"=>5),
            array("nombre"=>"Aviles","mañana"=>7,"tarde"=>17,"noche"=>11)
        );
        $totalTemperaturas=0;

        for($i=0;$i<count($temperaturas);$i++){
            echo "Ciudad: ".$temperaturas[$i]["nombre"]."<br>";
            echo "La temperatura por la mañana es ".$temperaturas[$i]["mañana"].
            ", de tarde es ".$temperaturas[$i]["tarde"]." y por la noche es ".$temperaturas[$i]["noche"]."<br>";
            $totalTemperaturas+=$temperaturas[$i]["mañana"]+$temperaturas[$i]["tarde"]+$temperaturas[$i]["noche"];
        }
        echo("La temperatura media de la ciudad ".($totalTemperaturas/9));

        
    ?>
</body>
</html>