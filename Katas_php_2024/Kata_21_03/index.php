<?php

//Kata numero de amstrong


//se  lo comparara con numeros de amstrong en base a su logica
//logica con booleano. true o false
function esAmstrong($numeroUsuario){
    if ($numeroUsuario != 0){
        //1ero necesito convertir a un array, el numero inglesado.
        $arrayDigitos = str_split($numeroUsuario);
        //2do contar los digitos (elementos que hay en el array)
        $cantidadDigitos = count($arrayDigitos);
        echo $cantidadDigitos;

        $comprobacion = 0;
        //recorrer el array y hacer el calculo
        foreach($arrayDigitos as $digito){
            $comprobacion += pow($digito, $cantidadDigitos);
        }

        //$cifra = strlen($numeroUsuario);
        //echo "la cantidad de digitos es:" . strlen($numeroUsuario). PHP_EOL;
        //separar el numero en digitos
        //$arrayNumero = str_split($count);
        //recorrer el numero y exponenciarlo por $cifra
        //$comprobacion= pow($base,$exp);


        //$comprobacion= (pow(1,$cifra) + pow(5,$cifra)+ pow(3,$cifra));
        //echo $comprobacion . PHP_EOL;

    }
}
//echo esAmstrong(153);


//devolvera la respuesta si o no


//ingresar el numero por temrinal:
do{
    $opcion = readline("Bienvenido al verificador de números de Armstrong." . PHP_EOL .
                        "Por favor, seleccione una opción:" . PHP_EOL .
                        "1. Verificar un número." . PHP_EOL .
                        "0. Salir del programa." . PHP_EOL);
switch($opcion){
    case 1: 
        //ingresar el numero
        $numeroUsuario= readline("Ingrese un numero: ");
        //convertilo a un array
        break;
    case 0:
        echo "Ha decidido salir del programa".PHP_EOL;
        break;
    default:
        echo "Opcion no valida, vuelva a intentarlo".PHP_EOL;           
}
}while ($opcion!=0);