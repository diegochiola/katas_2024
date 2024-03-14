<?php
//pedir por pantalla

do{
    $opcion = readline("Bienvenido a aplicacion rescata el tren.". "\n".
                    "Digite una opcion: ". "\n".
                    "1. Salvar al tren.". "\n".
                    "0. Salir de la aplicacion.". "\n");

switch($opcion){
    case 1: 
        //pensar en un array de numeros mas facil de 10 posiciones
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
        break;
    case 0:
        echo "Ha decidido salir del programa". "\n";
        break;
    default:
        echo "Opcion no valida, vuelva a intentarlo". "\n";           
}
}while ($opcion!=0);

//funcion suma dde valores ingresados y mostrar por pantalla

//comparacion con el numero






?>