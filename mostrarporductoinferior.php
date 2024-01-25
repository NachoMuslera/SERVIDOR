<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!--Mostrar el nombre de los productos con precio inferior 
 al primer articulo-->
<body>
    <?php 
    $productoPrecio=["Manzana"=>10,"Platano"=>8,"Naranja"=>9,"Melon"=>12];
    $primerPrecio=$productoPrecio["Manzana"];
    foreach($productoPrecio as $nombre=>$precio){
        if($precio<$primerPrecio){
            echo $nombre." - ".$precio." € <br>";
        }
     }
    ?>
</body>
</html>