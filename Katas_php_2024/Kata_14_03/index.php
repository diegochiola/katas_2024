<?php

//Variables
$freno1= false;
$freno2= false;
$numeroObjetivo1 = 67;
$numeroObjetivo2 = 87;

//funciones
function sumarDigitos($numerosIngresados, $numeroObjetivo){
    $sumatotal = array_sum($numerosIngresados);
    echo "Suma total: " . $sumatotal ."\n";
    return $sumatotal == $numeroObjetivo;
}
//simplificar codigo (refactor)
function ingresarNumeros($contador) {
    $numerosIngresados = [];
    for ($i = 1; $i <= $contador; $i++) {
        $numero = readline("Ingrese el número " . $i . ": ");
        $numerosIngresados[] = $numero;
        echo "Tu contador está en: " . $i . "\n";
        $sumaParcial = array_sum(array_slice($numerosIngresados, 0, $i));
        echo "Suma parcial: " . $sumaParcial . "\n";
    }
    return $numerosIngresados;
}


//menu por terminal
do{
    $opcion = readline("Bienvenido a aplicacion rescata el tren.". "\n".
                    "Digite una opcion: ". "\n".
                    "1. Salvar al tren.". "\n".
                    "0. Salir de la aplicacion.". "\n");

    switch($opcion){
        case 1:
            // Freno 1
                
                echo "El objetivo es: " . $numeroObjetivo1 . "\n";
                $numerosIngresados = ingresarNumeros(10);
                $freno1 = sumarDigitos($numerosIngresados, $numeroObjetivo1);
                echo $freno1 ? "Felicitaciones! Has frenado el primer freno del tren!\n" : "Has fallado!\n";
                
                if($freno1 && !$freno2){
                    echo "El objetivo es: " . $numeroObjetivo2 . "\n";
                    $numerosIngresados = ingresarNumeros(10);
                    $freno2 = sumarDigitos($numerosIngresados, $numeroObjetivo2);
                    echo $freno2 ? "Felicitaciones! Has salvado el tren!\n" : "Has fallado!\n";  
                }
        
            /*
            $numerosIngresados = [];
            //pedir numero por terminal
            $contador=10;
            for ($i = 1; $i <= $contador; $i++) {
                $numero = readline("Ingrese el número " . $i . ": ");
                $numerosIngresados[] = $numero;
                echo "Tu contador esta en: " . $i . "\n";
                //suma parcial de numero ingresados
                $sumaParcial = array_sum(array_slice($numerosIngresados, 0, $i));
                echo "Suma parcial: " . $sumaParcial . " / " . $numeroObjetivo1 . "\n";
            }
            //freno 1
            if ($opcion == 1 && !$freno1) {
                $tren = new SalvarTren();
                $freno1= $tren->sumarDigitos($numerosIngresados, $numeroObjetivo);
                echo $freno1 ? "Felicitaciones! Has frenado el primer freno del tren!\n" : "Has fallado!\n";
            }else if($freno1){
                echo "El objetivo es: " . $numeroObjetivo2 . "\n";
                for ($i = 1; $i <= $contador; $i++) {
                    $numero = readline("Ingrese el número " . $i . ": ");
                    $numerosIngresados[] = $numero;
                }
                $tren = new SalvarTren();
                $freno2 = $tren->sumarDigitos($numerosIngresados, $numeroObjetivo);
                echo $freno2 ? "Felicitaciones! Has salvado el tren!\n" : "Has fallado!\n";
            }else{
                echo "Has fallado!\n";
            }
            */
            break;
        case 0:
            echo "Ha decidido salir del programa". "\n";
            break;
        default:
            echo "Opcion no valida, vuelva a intentarlo". "\n";           
    }
   
  
}while ($opcion!=0);

?>
