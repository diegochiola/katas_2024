<?php

//Kata numero de amstrong

//se  lo comparara con numeros de amstrong en base a su logica
//logica con booleano. true o false
//$numeroUsuario = 153;

//version de validacion: que sea numero, que sea positivo
function esAmstrong($numeroUsuario){
    if ($numeroUsuario > 0 && is_numeric($numeroUsuario) && floor($numeroUsuario) == $numeroUsuario) {      //($numeroUsuario != 0){
        //1ero necesito convertir a un array, el numero inglesado. (separar el numero en digitos)
        $arrayDigitos = str_split($numeroUsuario);
        //2do contar los digitos (elementos que hay en el array)
        $cantidadDigitos = count($arrayDigitos);
        //echo "la cantidad de digitos es:" . $cantidadDigitos . PHP_EOL;

        $comprobacion = 0;
        //recorrer el array y hacer el calculo del exponencial
        foreach($arrayDigitos as $digito){
            //$comprobacion= (pow(1,$cifra) + pow(5,$cifra)+ pow(3,$cifra));
            $comprobacion += pow($digito, $cantidadDigitos);
            //echo $comprobacion . PHP_EOL;
        }
        //ultima verificacion o no amstrong (booleano)
        return $comprobacion == $numeroUsuario ? true : false;
    }else{
        return false; //si no cumple
    }
}
//corregir mensaje a partir de la validacion
function mensaje($numeroUsuario, $esAmstrong){ //mostrar mensaje por operador ternario true o false
    //echo $esAmstrong ? "El número $numeroUsuario es un número de Armstrong!" : "El número $numeroUsuario no es un número de Armstrong." . PHP_EOL;
    if(is_numeric($numeroUsuario)){
        if($esAmstrong){
           echo "El número $numeroUsuario es un número de Armstrong!" . PHP_EOL;
        }else{
            echo "El número $numeroUsuario no es un número de Armstrong." . PHP_EOL;
        }
    }else{
        echo "Por favor, ingrese un número entero positivo." . PHP_EOL; 
    }
}

//ingresar el numero por temrinal:
echo "Bienvenido al verificador de números de Armstrong." . PHP_EOL;
do{
    $opcion = readline("Por favor, seleccione una opción:" . PHP_EOL .
                        "1. Verificar un número." . PHP_EOL .
                        "0. Salir del programa." . PHP_EOL);
switch($opcion){
    case 1: 
        //ingresar el numero
        //$numeroUsuario= readline("Ingrese un numero: ");
        $numeroUsuario= "";
        while (!is_numeric($numeroUsuario)) {
            $numeroUsuario = readline("Ingrese un numero: ");
            // Verificar si el número es numérico
            if (!is_numeric($numeroUsuario)) {
                echo "Por favor, ingrese un número válido." . PHP_EOL;
                continue;
            }
        }
        mensaje($numeroUsuario, esAmstrong($numeroUsuario));
    
        break;
    case 0:
        echo "Ha decidido salir del programa".PHP_EOL;
        break;
    default:
        echo "Opcion no valida, vuelva a intentarlo".PHP_EOL;           
}
}while ($opcion!=0);

?>