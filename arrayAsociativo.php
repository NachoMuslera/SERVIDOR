<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $alumno=array(
            array("nombre"=>"rosa","estatura"=>168,"sexo"=>"F"),
            array("nombre"=>"pedro","estatura"=>175,"sexo"=>"M"),
            array("nombre"=>"matias","estatura"=>200,"sexo"=>"M"),
        );

    for($i=0;$i<count($alumno);$i++){
        echo"NOMBRE: ".$alumno[$i]["nombre"]."<br>";
        echo"ALTURA: ".$alumno[$i]["estatura"]."<br>";
        if($alumno[i]["sexo"]="F"){
            echo "SEXO FEMENINO";
        }else{
            echo "SEXO MASCULINO";
        }
    }
    ?>
</body>
</html>