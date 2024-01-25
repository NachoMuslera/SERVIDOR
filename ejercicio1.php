<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<!-- hacer un array con 5 nombres de alumnos y un segundo array con sus notas 
Mostrar el nombre y la nota de cada alumno, utilizar foreach --> 
<?php 
/*
$nombreAlumnos=["Pablo","Nicolas","Moises","Hugo","Alae"];
$notas= array(9.9,4.95,2.0,0.5,10);

foreach($nombreAlumnos as $nom){
    
    echo "El nombre del alumno es ".$nom." su nota es ".$notas."<br>";
}

 
$nombreAlumnos=["Pablo","Nicolas","Moises","Hugo","Alae"];
$notas= array(9.9,4.95,2.0,0.5,10);

for($i=0,$i<count($nombreAlumnos);i++){
    echo "El alumno($nombreAlumnos[$i]) ha sacado ($notas[$i]) puntos<br>";
}

*/
$notasAlumnos=["Pablo",9.9,"Nicolas",4.95,"Moises",2,"Hugo",0.5,"Alae",10];
$i=0;
foreach($notasAlumnos as $valores){
   if($i%2==0){
    echo "El alumno se llama ".$valores;
   }else{
    echo " y a sacado ".$valores."<br>";
   }
   $i++;
}


?>
</body>
</html>