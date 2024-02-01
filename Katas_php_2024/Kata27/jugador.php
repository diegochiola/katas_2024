<?php
class Jugador{
    //atributos:
    private string $nombre;
    private int $madera;
    private int $lana;
    private int $cereal;
    private int $arcilla ;
    private int $metal;

public function __construct($nombre, $madera, $lana, $cereal, $arcilla, $metal ){
    $this->nombre=$nombre;
    $this->madera = $madera;
    $this->lana= $lana;
    $this->cereal = $cereal;
    $this->arcilla = $arcilla;
    $this->metal = $metal;
}

public function comprarCarretera(){
    if($this->madera>=1 && $this->arcilla>=1){
        $this->madera -=1;
        $this->arcilla -=1;
        return "Has comprado una Carretera";
        
    }else{
        return "No has podido realizar la compra por falta de recursos";
    }
}
//meter las funciones en un menu de seleccion por terminal
public function ComprarPoblado(){
    if($this->madera >= 1 && $this->arcilla >= 1 && $this->cereal >= 1 && $this->lana>=1){
        $this->madera -=1;
        $this->arcilla -=1;
        $this->cereal -=1;
        $this->lana -=1;
        return "Has comprado un poblado";

    }else{
        return "No has podido realizar la compra por falta de recursos";  
    }
}
public function ComprarCiudad(){
    if( $this->cereal >= 2 && $this->metal>=3){
        $this->cereal -=2;
        $this->metal -=3;
        return "Has comprado una Ciudad";

    }else{
        return "No has podido realizar la compra por falta de recursos";  
    }
}
public function ComprarCartaDesarrollo(){
    if($this->cereal >= 1 && $this->lana>=1 && $this->metal>=1){
        $this->cereal -=1;
        $this->lana -=1;
        $this->metal -=1;
        return "Has comprado una Carta de Desarrollo";

    }else{
        return "No has podido realizar la compra por falta de recursos";  
    }
}
//to string

public function __toString(){
    return "Los recursos disponibles del usuario: " .$this->nombre . "\n".
    "Madera: " .$this->madera. "\n".
    "Lana: " .$this->lana. "\n".
    "Cereal: " .$this->cereal. "\n".
    "Arcilla: " .$this->arcilla. "\n".
    "Metal: " .$this->metal. "\n";
}
/*Carretera(1 madera y una arcilla)´

Ciudad(2 cereales y 3 metales)
Carta de desarrollo (1 cereal, lana, metal)*/


}

?>