<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persona</title>
</head>
<body>
    <?php
    class persona{
        protected $nombre;
        protected $apellido;
        protected $edad;

        public function __construct($n,$a,$e=0)
        {
            $this->nombre=$n;
            $this->apellido=$a;
            $this->edad=$e;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function getApellido(){
            return $this->apellido
        }
        public __toString(){
            return "Nombre: ".$this->nombre, $this->apellido, $this->edad;
        }
    }
    ?>
</body>
</html>