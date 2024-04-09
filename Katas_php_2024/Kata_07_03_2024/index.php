<?php
require_once 'Luchador.php';
require_once 'Enfrentamiento.php';

//instancio luchador $nombre, $vida, $fuerza, $defensa

$luchador1= new Luchador("Makita",10,5,8);
$luchador2= new Luchador("ZubZeno",10,8,10);

//campeonato

function combate(Luchador $luchador1, Luchador $luchador2){
//comparar fuerzas
    $comparacion = compararFuerzas($luchador1, $luchador2);
//hacer switch de opcion de ataque
//daño vida
    $daño = ($luchador1->fuerza) - ($luchador2->defensa);
    $vidaActual=($luchador2->vida) - $daño;
}
function compararFuerzas(Luchador $luchador1, Luchador $luchador2){
    if ($luchador1->fuerza == $luchador2->fuerza){
        //hay un 50% de posibilidades de que el ataque tenga éxito por uno u otro luchador.
        
    }else if( $luchador1->fuerza > $luchador2->fuerza){

    }
}

