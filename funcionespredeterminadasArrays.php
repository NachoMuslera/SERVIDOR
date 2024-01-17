<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones 1</title>
</head>
<body>
    
<?php 

$notasAlumno=["MONICA"=>5.6,"ANA"=>4.7,"LUIS"=>8.9];

foreach($notasAlumno as $nombre => $nota){
    echo "<br>".$nombre."->".$nota;
}

// un_SET

echo "<br><br>*******************";
unset($notasAlumno["ANA"]);

foreach($notasAlumno as $nombre => $nota){
    echo "<br>".$nombre."->".$nota;
}

echo "<br><br>*******************";

$claves=array_keys($notasAlumno);

foreach($claves as $nombre){
    echo "<br>".$nombre;
}

echo "<br><br>*******************";

$valores=array_values($notasAlumno);

foreach($valores as $datos){
    echo "<br>".$datos;
}

echo "<br><br>*******************";

$notasAlumnoUnion=array_combine($claves,$valores);

foreach ($notasAlumnoUnion as $nombre=>$nota){
    echo "<br>".$nombre."->".$nota;
}

echo "<br><br>";

if(in_array(5,$notasAlumnoUnion)){
    echo "existe";
}else {
    echo "no existe";
}
?>
</body>
</html>