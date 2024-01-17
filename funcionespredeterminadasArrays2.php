<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    
<?php 

$planetas=["marte","tierra","venus"];

$ciudades=["oviedo","gijon","mieres","luanco"];

$datos="";

$nombre="ANA-MARIA-JOSE-JUAN";

foreach($planetas as $nombre){
    echo $nombre." - ";
}

echo "<br><br>";

// Reducir el tamaño del array array_slice
$planetas=array_slice($planetas,0,3);

foreach($planetas as $nombre){
    echo $nombre." - ";
}

echo "<br><br>";

// Quitar el último elemento del array

array_pop($planetas);

foreach($planetas as $nombre){
    echo $nombre." - ";
}

echo "<br><br>";

// Añadir elemento a array al final

array_push($planetas,"saturno");
array_push($planetas,"venus");

foreach($planetas as $nombre){
    echo $nombre." - ";
}

echo "<br><br>";

// Añadir elemento a array al principio

array_unshift($planetas,"jupiter");
array_unshift($planetas,"urano");

foreach($planetas as $nombre){
    echo $nombre." - ";
}

echo "<br><br>";

// Quitar elemento a array al principio

array_shift($planetas);

foreach($planetas as $nombre){
    echo $nombre." - ";
}

echo "<br><br>";

// Elimina una porción del array y reemplaza por otra cosa

array_splice($planetas,1,1,"prueba");

foreach($planetas as $nombre){
    echo $nombre." - ";
}

echo "<br><br>";

// Añade un array nuevo seguido del anterior array

$planetas=array_merge($planetas,$ciudades);

foreach($planetas as $nombre){
    echo $nombre." - ";
}

echo "<br><br>";


// Combina los elementos de un array en un string

$datos = implode($planetas);;
echo $datos;

echo "<br><br>";

//explode

$arrayAlumnos = explode("-",$nombre);

for($i=0;$i<count($arrayAlumnos);$i++){
    echo $arrayAlumnos[$i],"---";
}

?>
</body>
</html>