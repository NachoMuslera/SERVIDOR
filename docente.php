<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docente</title>
</head>
<body>
    <?php
    include "persona.php";
    class Docente extends Persona{
        private $salario;
        public function __construct($n,$a,$e=0,$s)
        {
            parent::__construct($a,$e,$n);
            $this->salario=$s;
        }

        public function getSalario{
            return $this->salario;
        }
        public function setSalario{
            
        }
    }
    ?>
</body>
</html>