<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatura Mínima y máximat</title>
</head>
<body>
    <?php
     $temperaturas = [25, 26, 24, 28, 22, 27, 23];
     $totalTemperatura = 0;
     $tempeMin = $tempeMax = $temperaturas[0];
    
     foreach ($temperaturas as $temperatura) {
         $totalTemperatura += $temperatura;
 
         if ($temperatura < $tempeMin) {
             $tempeMin = $temperatura;
         }
 
         if ($temperatura > $tempeMax) {
             $tempeMax = $temperatura;
         }
     }
 
     $mediaSemana = $totalTemperatura / count($temperaturas);
 
     echo "La media de la semana es $mediaSemana<br>";
     echo "La temperatura máxima es $tempeMax y la mínima $tempeMin";
    ?>
</body>
</html>