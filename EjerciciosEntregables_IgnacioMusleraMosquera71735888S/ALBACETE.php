<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALBASETE</title>
</head>
<body>
<?php 

    $personas=array(
        array(
            "nombre"=>"Manuel",
            "apellidos"=>"Cortés Raya",
            "Ciudad"=>"Oviedo"
        ),
        array(
            "nombre"=>"Laura",
            "apellidos"=>"Calvo Calvo",
            "Ciudad"=>"Calvolandia"
        ),
        array(
            "nombre"=>"Mohammed",
            "apellidos"=>"Allae Abdelrahman",
            "Ciudad"=>"Albacete"
        )

    );

   
   foreach($personas as $persona){
    echo "Nombre:{$persona['nombre']}, Apellidos: {$persona['apellidos']}, Ciudad: {$persona['Ciudad']}<br>";
   }

   $contarAlbacete=0;
   foreach($personas as $persona){
       if($persona['Ciudad']=="Albacete"){
           $contarAlbacete++;
       }
   }
    ?>
</body>
</html>