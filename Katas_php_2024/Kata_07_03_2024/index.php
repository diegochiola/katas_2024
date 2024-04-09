<?php
require_once 'Luchador.php';
require_once 'Enfrentamiento.php';

//instancio luchador $nombre, $fuerza, $defensa (predefinidos la vida)
$luchador1= new Luchador("Mega Man",10,5);
$luchador2= new Luchador("Hulk",10,8);

//campeonato
echo "Bienvenidos a Campeonato de Lucha de Superheroes";

$enfrentamiento= new Enfrentamiento($luchador1, $luchador2);
$enfrentamiento->enfrentamiento();


