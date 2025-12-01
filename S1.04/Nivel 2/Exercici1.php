<?php

//Creo la clase PokerDice y dentro instancio las variables correspondies. Una de ellas es faces que es un Array.

class PokerDice{
    private $faces = ["As", "K", "Q", "J", "7", "8"];
    private $lastFace;
    private $totalRolls;

//Creo funcion throw para tirar dado. En él, utilizo la funcion mágica array_rand que tira un random del array. Despúes guardo esta cara para poder saber que ha salido en el dado (esto con otro método), y también le sumo 1 al contador para poder saber el número de tiradas que hice. 

public function throw(){
    $key = array_rand($this->faces);
    $this->lastFace = $this->faces[$key];
    $this->totalRolls++;
}

//Aquí genero la función "saber última cara" que simplemente retorna la variable que cree de "lastFace". 

public function knowLastFace(){
    return $this->lastFace;
}

//Esta función devuelve también la variable de totalRolls que es donde he ido sumando 1 en nuestro otro método "throw", para poder saber cuantas veces hemos tirado el dado. 

public function counter(){
    return $this->totalRolls;
}

}

//Pruebas 

$dado1 = new PokerDice;

//no aparece nada en consola por que no he tirado el dado: 

echo $dado1->counter();

//tiro dado 

$dado1->throw();
echo "He tirado el dado: " . $dado1->counter() . " veces.";
echo "\n";
echo "La última cara ha sido: " . $dado1->knowLastFace();
echo "\n";

//tiro dado

$dado1->throw();
echo "La última cara ha sido: " . $dado1->knowLastFace();
echo "\n";
echo "Contador de tiradas del dado: ";
echo $dado1->counter();


