<?php

class Luchador{
public $nombre;
public $vida;
public $fuerza;
public $defensa;

public function __construct($nombre, $fuerza, $defensa){
    $this->nombre=$nombre;
    $this->vida =10;
    $this->fuerza= $fuerza;
    $this->defensa = $defensa;
   
}


//getter
public function getName(){
    return $this->nombre;
}
public function getVida(){
    return $this->vida;
}
public function getFuerza(){
    return $this->fuerza;
}
public function getDefensa(){
    return $this->defensa;
}

//setter

//funciones
public function atacar() {
    return rand(1, $this->fuerza);
}

public function recibirGolpe($perjuicio) {
    $perjuicio -= $this->defensa;
    $this->vida -= ($perjuicio <= 0) ? 1 : $perjuicio;
}

public function estaVivo() {
    return $this->vida > 0;
}


public function __toString(){
    return "Luchador llamado: ".$this->nombre . PHP_EOL . "Vida: " . $this->vida . PHP_EOL . "Fuerza: " . $this->fuerza . PHP_EOL . "Defensa: " . $this->defensa . PHP_EOL;
}

}
