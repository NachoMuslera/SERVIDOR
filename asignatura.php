
<?php

class Asignatura {
    public $nombreAsignatura;
    public $notaTema1;
    public $notaTema2;

    public function __construct($nombre, $nota1, $nota2) {
        $this->nombreAsignatura = $nombre;
        $this->notaTema1 = $nota1;
        $this->notaTema2 = $nota2;
    }

    public function notaMedia() {
        return ($this->notaTema1 + $this->notaTema2) / 2;
    }

    public function aprobado() {
        return $this->notaMedia() >= 5.0;
    }
}

class Alumno {
    public $nombreAlumno;
    public $asignatura1;
    public $asignatura2;

    public function __construct($nombre, $asignatura1, $asignatura2) {
        $this->nombreAlumno = $nombre;
        $this->asignatura1 = $asignatura1;
        $this->asignatura2 = $asignatura2;
    }

    public function aprobadoCurso() {
        return $this->asignatura1->aprobado() && $this->asignatura2->aprobado();
    }
}

// Crear asignaturas para el primer estudiante
$asignaturaCliente1 = new Asignatura("Cliente", 7.5, 8.0);
$asignaturaServidor1 = new Asignatura("Servidor", 6.0, 6.5);

// Crear asignaturas para el segundo estudiante
$asignaturaCliente2 = new Asignatura("Cliente", 4.5, 5.0);
$asignaturaServidor2 = new Asignatura("Servidor", 6.5, 7.0);

// Crear estudiantes
$estudiante1 = new Alumno("Cristian", $asignaturaCliente1, $asignaturaServidor1);
$estudiante2 = new Alumno("Cosmin", $asignaturaCliente2, $asignaturaServidor2);

// Agregar dos alumnos más
$asignaturaCliente3 = new Asignatura("Cliente", 6.0, 7.0);
$asignaturaServidor3 = new Asignatura("Servidor", 5.5, 6.0);
$estudiante3 = new Alumno("Carlos", $asignaturaCliente3, $asignaturaServidor3);

$asignaturaCliente4 = new Asignatura("Cliente", 3.0, 4.0);
$asignaturaServidor4 = new Asignatura("Servidor", 4.5, 5.0);
$estudiante4 = new Alumno("Carmen", $asignaturaCliente4, $asignaturaServidor4);

// Array de estudiantes
$estudiantes = [$estudiante1, $estudiante2, $estudiante3, $estudiante4];

// Mostrar notas de cada alumno y asignaturas
foreach ($estudiantes as $estudiante) {
    echo "Notas de " . $estudiante->nombreAlumno . ":\n";
    echo "Asignatura Cliente: " . $estudiante->asignatura1->notaMedia() . "\n";
    echo "Asignatura Servidor: " . $estudiante->asignatura2->notaMedia() . "\n";
    echo "\n";
}

// Verificar si los estudiantes han aprobado el curso
foreach ($estudiantes as $estudiante) {
    echo $estudiante->nombreAlumno . " ha " . ($estudiante->aprobadoCurso() ? "aprobado" : "suspendido") . " el curso.<br>";
}

// Comprobar si algún estudiante tiene la nota mínima en alguna asignatura
foreach ($estudiantes as $estudiante) {
    foreach ([$estudiante->asignatura1, $estudiante->asignatura2] as $asignatura) {
        if ($asignatura->notaMedia() < 5.0) {
            echo $estudiante->nombreAlumno . " tiene una nota inferior a 5 en " . $asignatura->nombreAsignatura . ".<br>";
        }
    }
}

?>
