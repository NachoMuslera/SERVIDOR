<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    /*Necesitamos gestionar una tienda de ropa teniendo 
     en cuenta que cada producto tiene: codigoBarras, nombreProducto
     precio,color,talla. Meter 3 productos*/

     $productos=[
        "Pantalon"=>["codigoBarras"=>6174,"precio"=>10,"color"=>"negro","talla"=>"M"],
        "Sudadera"=>["codigoBarras"=>2884,"precio"=>15,"color"=>"blanco","talla"=>"L"],
        "Camiseta"=>["codigoBarras"=>2948,"precio"=>13,"color"=>"azul","talla"=>"S"]
     ];

     foreach($productos as $nombre=>$datos){
        echo "<br> {$nombre} <br>";
        foreach($datos as $informacion=>$valor){
            echo " {$informacion}=>{$valor}<br>";
            
        }
     }
     //Mostrar la media d elos precios de los articulos

     $totalPrecio=0;
     foreach($productos as $nombre=>$datos){
        foreach($datos as $informacion=>$valor){
            if($informacion=="precio"){
                $totalPrecio+=$valor;
            }
        }
     }
     echo "<br>La media de los precios es ".($totalPrecio/count($productos));

    ?>
</body>
</html>