<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $nombreAlumnos=array("Pablo","Adrian","Nicolas","Zaira","Laura");
    
    for($i=0;$i<count($nombreAlumnos);$i++){
        echo "El nombre del alumno".($i+1)." es ".$nombreAlumnos[$i]."<br>";
    }
    ?>
</body>
</html>