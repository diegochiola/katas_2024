<?php

class Luchador{
private string $nombre;
private int $vida;
private int $fuerza;
private int $defensa;

public function __construct($nombre, $vida, $fuerza, $defensa){
    $this->nombre=$nombre;
    $this->vida =$vida;
    $this->fuerza= $fuerza;
    $this->defensa = $defensa;
   
}

}
