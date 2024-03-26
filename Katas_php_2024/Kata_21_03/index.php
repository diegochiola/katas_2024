<?php

//Kata numero de amstrong
//el usuario ingresara un numero
$numeroUsuario=153;
$cifras=0;

//ingresar el numero por temrinal:

do{
    $opcion = readline("Bienvenido a numero de Amstrong.".PHP_EOL.
                    "Digite una opcion: ".PHP_EOL.
                    " 1. Jugar.".PHP_EOL.
                    " 0. Salir de la aplicacion.".PHP_EOL);
switch($opcion){
    case 1: 
        //ingresar el numero
        $numero1= readline("Ingrese un numero: ");
        //convertilo a un array
        break;
    case 0:
        echo "Ha decidido salir del programa".PHP_EOL;
        break;
    default:
        echo "Opcion no valida, vuelva a intentarlo".PHP_EOL;           
}
}while ($opcion!=0);


//se  lo comparara con numeros de amstrong en base a su logica
//logica con booleano. true o false
function esAmstrong($numeroUsuario){
    if ($numeroUsuario != 0){
        //necesito contar las cifras del numero inglesado
        $cifra = strlen($numeroUsuario);
        echo "la cantidad de digitos es:" . strlen($numeroUsuario). PHP_EOL;
        //separar el numero en digitos
        //$arrayNumero = str_split($count);
        //recorrer el numero y exponenciarlo por $cifra
        //$comprobacion= pow($base,$exp);
        $comprobacion= (pow(1,$cifra) + pow(5,$cifra)+ pow(3,$cifra));
        echo $comprobacion . PHP_EOL;

    }
}
echo esAmstrong(153);


//devolvera la respuesta si o no