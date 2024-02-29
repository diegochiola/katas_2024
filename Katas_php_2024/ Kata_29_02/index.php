<?php
//Kata 29/02/2024
/*
kata-recursive-call
Kata 29 por la especialidad fullstackPHP 29-2-24
Kata 29, un 29 de febrero...tardaremos en volver a tener otro 29 de febrero...o sea que para hoy tenemos un problema MUY especial :)
Déjelo que le presente el concepto de programación recursiva.
Hoy le reto a resolver un sencillo problema de esta manera.
Haz una función recursiva que cuente(muestre) desde n a 0.
Bonus track:

Realiza también una función recursiva que calcule y devuelva el factorial de un número dado.
Por último, muestra la serie de Fibonacci de un número dado.
Input
,
5
3
Output

5,4,3,2,1,0
3,2,1,0
Esta vez, también, la idea de kata nos viene dada por un reto de MoureDev!! El#6 de 2024.
​*/

/*
//defino n si fuese un array
$n= array(5,4,3,2,1,0);

function recorrer($n){
    foreach ($n as $indice) { 
        echo $indice. "\n";      
}
}
 recorrer($n);
*/

 /*
//ahora si $i es un numero ingresado por el usuario
$i=3;
 //for
for ($i; $i >= 0; $i--) {
    echo $i."\n";
}
*/
//funcion recursiva definiendo $a
$a= 5;
function funcionRecursiva($a){
    echo $a."\n";
    if($a>0){
        funcionRecursiva(--$a);
    }
}
//llamo a la funcion
funcionRecursiva($a);

//Como seria secuencia fibonacci


?>
