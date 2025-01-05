<?php   

// class Persona {
//     public $nombre;
//     public $edad;
//     public $pais;

//     public function mostrarInformacion () {
//         echo "Hola, soy " . $this->nombre . ", tengo " . $this->edad . " y soy de " . $this->pais;
//         }
// }

// $carlos = new Persona();

// $carlos ->nombre = "Carlos Arturo";
// $carlos->edad = "33";
// $carlos->pais = "Argentina";
// $carlos->mostrarInformacion();



class Persona {
    public $nombre;
    public $edad;
    public $pais;

    public function mostrarInformacion () {
        return "Hola, soy " . $this->nombre . ", tengo " . $this->edad . " y soy de " . $this->pais . "<br>";
        }

    function __construct($nombre,$edad,$pais){
        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->pais=$pais;
    }
};

$carlos = new Persona("Carlos Arturo", 33, "Argentina");
echo $carlos->mostrarInformacion();


class Estudiante extends Persona {
    public $carrera; // accesible desde dentro y fuera de la clase
    //private $carrera; hace que solo pueda ser accesible desde dentro de la clase madre
    //protected $carrera; hace que pueda ser accesible desde la clase madre  y las heredadas. Puedo hacer funciones que usen y muestren el valor, pero no permite que se acceda desde fuera de la clase

    public function mostrarInformacion () {
        return "Hola, soy " . $this->nombre . ", tengo " . $this->edad . ", soy de " . $this->pais . " y mi profesion es " . $this->carrera  . "<br>";
        }

    function __construct($nombre,$edad,$pais,$carrera){
        // $this->nombre=$nombre;
        // $this->edad=$edad;
        // $this->pais=$pais;
        parent::__construct($nombre,$edad,$pais);
        $this->carrera=$carrera;
    }
};

$mariano = new Estudiante("Mariano ", 31, "Chile", "Programador");
echo $mariano->mostrarInformacion();



//la funcion de las CLASES ABSTRACTAS es que no podamos acceder a una clase a menos que la HEREDEMOS
abstract class Perros {

}

//la palabra reservada STATIC me permite acceder a las propiedades de la clases, sin instanciarlas.
//puedo llamar las funciones con parametros, haciendo que si no se me brinda el mismo  sea null, pero que si se me brinda se use ese valor ($tamaño = null)
class Gatos {
    public static $raza = "siames <br>";
    public static function maullido ($tamaño = null) {
        if ($tamaño){
            return "miauuu " . $tamaño . "<br>";
        } else {
            return "miau sin tamaño <br>";
        }
        
    }

};

echo Gatos::$raza;
echo Gatos::maullido("grandote");
echo Gatos::maullido();

//Encadenado de metodos: hay que agregar a los metodos en el constructor "return $this" para poder encadenar los metodos desde fuera $saludo->metodo1()->metodo2()->metodo3();

class Metodos {
    public function metodo1(){
        echo "hola ";
        return $this;
    }
    public function metodo2(){
        echo "soy ";
        return $this;
    }
    public function metodo3(){
        echo "tete";
        return $this;
    }
}

$saludo = new Metodos();
$saludo->metodo1()->metodo2()->metodo3();
