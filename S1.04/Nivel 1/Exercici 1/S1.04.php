<?php

/* EXERCICI 1 */

echo "\n";
echo "~Exercici 1~\n";
echo "\n";

class Employed{
    private $name;
    private $salary;

    public function __construct($name, $salary){
        
        $this->name = $name;
        $this->salary = $salary;
    }

    //No entiendo muy bien esta función que pide el ejercicio... 

    public function setInfo($name, $salary){
        $this->name = $name;
        $this->salary = $salary;
    }
 
    //Probando con un toString para que quede mejor en consola. 

    public function __toString(){
    return "Empleado: {$this->name}, Sueldo: {$this->salary}";

    }

    //Creo segundo metodo que pide el ejercicio.

    public function showIfShouldPay(){
        if ($this->salary > 6000) {
            return "{$this->name} debe pagar impuestos.";
        }
        else {
            return "{$this->name} no debe pagar impuestos.";
        }
    }

}

//Creo un empleado y lo muestro.

$empleado1 = new Employed("Daniel", 3000);

var_dump($empleado1);
echo "\n";

//Ahora lo muestro con el toString

echo $empleado1;
echo "\n";

//Llamo a la función creada. 

echo "\n";
echo $empleado1->showIfShouldPay();

