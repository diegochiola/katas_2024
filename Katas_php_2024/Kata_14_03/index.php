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
                $numeroObjetivo = 67;
                $tren = new SalvarTren();
                $tren->sumarDigitos($numerosIngresados, $numeroObjetivo);
                $freno1 = true;  
            }
            break;
        case 0:
            echo "Ha decidido salir del programa". "\n";
            break;
        default:
            echo "Opcion no valida, vuelva a intentarlo". "\n";           
    }
    //en caso de haber realizado el freno 1
    if($freno1){
        $numeroObjetivo = 87; 
        $tren2 = new SalvarTren();
        $tren2->sumarDigitos($numerosIngresados, $numeroObjetivo);
    }
}while ($opcion!=0);

?>
