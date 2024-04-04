<?php
require_once('SalvarTren.php');
//pedir por pantalla

do{
    $opcion = readline("Bienvenido a aplicacion rescata el tren.". "\n".
                    "Digite una opcion: ". "\n".
                    "1. Salvar al tren.". "\n".
                    "0. Salir de la aplicacion.". "\n");

    switch($opcion){
        case 1: 
            //pensar en un array de numeros mas facil de 10 posiciones
            $numerosIngresados = [];
            /*
            $numero1= readline("Ingrese un numero: ");
            $numero2= readline("Ingrese un numero: ");
            $numero3= readline("Ingrese un numero: ");
            $numero4= readline("Ingrese un numero: ");
            $numero5= readline("Ingrese un numero: ");
            $numero6= readline("Ingrese un numero: ");
            $numero7= readline("Ingrese un numero: ");
            $numero9= readline("Ingrese un numero: ");
            $numero9= readline("Ingrese un numero: ");
            $numero10= readline("Ingrese un numero: ");
            $numerosIngresados= array($numero1,$numero2,$numero3,$numero4,$numero5, $numero6, $numero7, $numero8, $numero9, $numero10);
            */
            //recorrro array
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
                //suma parcial de numero ingresados
                
            //freno2
            } elseif ($opcion == 2) {
                $numeroObjetivo = 87; // Cambiar el objetivo para el segundo caso
                $tren = new SalvarTren();
                $tren->sumarDigitos($numerosIngresados, $numeroObjetivo);
                //no tiene suma parcial porque esta rota la pantalla
            }
            break;
        case 0:
            echo "Ha decidido salir del programa". "\n";
            break;
        default:
            echo "Opcion no valida, vuelva a intentarlo". "\n";           
    }
}while ($opcion!=0);








