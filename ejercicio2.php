<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- Tenemos 5 alumnos y queremos almacenar en un array el nombre
y su edad. Mostrar los alumnos con su edad y mostrar la media de las edades
de todos los alumnos. Utilizar un for para recorrer el array -->
<body>
    <?php 
    
    $alumnos=["Pablo",19,"Nicolas",15,"Moises",25,"Hugo",17,"Nacho",22];

    $totalEdad=0;
    $i=0;

    foreach($alumnos as $valor){
      if($i%2!=0){
        $totalEdad+=$valor;
       }
       $i++; 
    }
    echo "La media de edades es ".($totalEdad/5)."<br>";
    
    for($i=0;$i<count($alumnos);$i++){
        if($i%2==0){
            echo "El nombre del alumno es ".$alumnos[$i];
        }else{
            echo " y su edad es ".$alumnos[$i]."<br>";
        }   
    }
?>
</body>
</html>