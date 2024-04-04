<?php
require_once('SalvarTren.php');
$freno1= false;


do{
    $opcion = readline("Bienvenido a aplicacion rescata el tren.". "\n".
                    "Digite una opcion: ". "\n".
                    "1. Salvar al tren.". "\n".
                    "0. Salir de la aplicacion.". "\n");

    switch($opcion){
        case 1: 
            //pensar en un array de numeros mas facil de 10 posiciones
            $numerosIngresados = [];
            //pedir numero por terminal
            $contador=10;
            $numeroObjetivo = 67;
            echo "El objetivo es: " . $numeroObjetivo . "\n";
            for ($i = 1; $i <= $contador; $i++) {
                $numero = readline("Ingrese el número " . $i . ": ");
                $numerosIngresados[] = $numero;
                echo "Tu contador esta en: " . $i . "\n";
                //suma parcial de numero ingresados
                $sumaParcial = array_sum(array_slice($numerosIngresados, 0, $i));
                echo "Suma parcial: " . $sumaParcial . "\n";
            }
            //freno 1
            if ($opcion == 1) {
                $tren = new SalvarTren();
                $freno1= $tren->sumarDigitos($numerosIngresados, $numeroObjetivo);
                echo $freno1 ? "Felicitaciones! Has frenado el primer freno del tren!\n" : "Has fallado!\n";
            }
            break;
        case 0:
            echo "Ha decidido salir del programa". "\n";
            break;
        default:
            echo "Opcion no valida, vuelva a intentarlo". "\n";           
    }
    //freno 2
    if($freno1){
        $numerosIngresados = [];
        $contador = 10;
        $numeroObjetivo = 87;
        echo "El objetivo es: " . $numeroObjetivo . "\n";
        for ($i = 1; $i <= $contador; $i++) {
            $numero = readline("Ingrese el número " . $i . ": ");
            $numerosIngresados[] = $numero;
        }
        $tren = new SalvarTren();
        $freno2 = $tren->sumarDigitos($numerosIngresados, $numeroObjetivo);
        echo $freno2 ? "Felicitaciones! Has salvado el tren!\n" : "Has fallado!\n";
    }
}while ($opcion!=0);

?>
