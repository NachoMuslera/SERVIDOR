<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CochecitoLere</title>
</head>
<body>
    <?php

        class coche{
            private $marca;
            private $modelo;
            private $color;
            private $pintura;
            private $matricula;
            private $aniofabricacion;

            public function __construct($matri)
            {
                $this->matricula=$matri;
                $this->marca="Seat";
                $this->pinturametalizada=false;
                $this->aniofabricacion=2024;
            }

            public function getMarca(){
                return $this->marca;
            }
            public function getMatricula(){
                return $this->matricula;
            }
            public function getColor(){
                return $this->color;
            }
            public function getModelo(){
                return $this->modelo;
            }
            public function getAnioFabricacion(){
                return $this->aniofabricacion;
            }
            public function getpintura(){
                return $this->pintura;
            }

        }


    ?>
</body>
</html>