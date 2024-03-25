<?php

//Kata numero de amstrong
//el usuario ingresara un numero
$numeroUsuario=153;
$cifras=0;



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