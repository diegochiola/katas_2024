<?php

/*Input
1453 3
1443 7
3772341 7
*/
$numero1=1453;
$numero2= 1443;
$numero3=3772341;

//usar array map
$array1= [1,4,5,3];
$array2= [1,4,4,3];
$array3= [3,7,7,2,3,4,1];

$cifra1= 3;
$cifra2=7;
$cifra3 = 7;

//convertir int en un array y recorrer el array para luego ir uno a uno en un for each y buscar coincidencia
//$array1  = array_map('intval', str_split($number1));

function findCifra(array $array, int $cifra, int $numero){
    foreach($array as $item){
        if($item == $cifra){
            echo"La xifra". $cifra. " existeix dins el nombre ". $numero."\n";
        }else{
            echo "La xifra". $cifra. " no existeix dins el nombre ". $numero."\n";;
        }
    } 
}

echo findcifra($array1, $cifra1, $numero1);
echo findcifra($array2, $cifra2, $numero2);
echo findcifra($array3, $cifra3, $numero3);

/*
foreach($array1 as $item){
    if($item == $cifra1){
        echo"La xifra 3 existeix dins el nombre 1453. <br>";
    }else{
        echo ("La xifra 3 no existeix dins el nombre 1453.");
    }
} 
*/




?>