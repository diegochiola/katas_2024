<?php
require_once 'Luchador.php';
require_once 'Enfrentamiento.php';

//instancio luchador $nombre, $fuerza, $defensa (predefinidos la vida)
//$luchador1 = new Luchador("Mega Man", 10, 8);
//$luchador2 = new Luchador("Hulk", 10,15);


//menu por terminal
do {
    // Reiniciar el estado de los luchadores
    //instancio luchador $nombre, $fuerza, $defensa (predefinidos la vida)
    $luchador1 = new Luchador("Mega Man", 10, 8);
    $luchador2 = new Luchador("Hulk", 10,15);

    echo "Bienvenidos a Campeonato de Lucha de Superheroes." . PHP_EOL;
    $opcion = readline("Seleccione un superheroe: " . PHP_EOL .
        "1. Mega Man." . PHP_EOL .
        "2. Hulk." . PHP_EOL .
        "0. Salir de la aplicacion." . PHP_EOL);
    switch ($opcion) {
        case 1:
            //campeonato con menu
            echo "Usted a elegido luchar con Mega Man" . PHP_EOL;
            $enfrentamiento = new Enfrentamiento($luchador1, $luchador2);
            $enfrentamiento->enfrentamiento();
            break;
        case 2:
            //campeonato con menu
            echo "Usted a elegido luchar con Hulk" . PHP_EOL;
            $enfrentamiento = new Enfrentamiento($luchador1, $luchador2);
            $enfrentamiento->enfrentamiento();
            break;
        case 0:
            echo "Ha decidido salir del programa" . "\n";
            break;
        default:
            echo "Opcion no valida, vuelva a intentarlo" . "\n";
    }
} while ($opcion != 0);

?>
