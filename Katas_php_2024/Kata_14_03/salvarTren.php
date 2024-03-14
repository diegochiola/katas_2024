<?php
class SalvarTren{

//atributos


//sumar numero ingresados y compararlo con $numeros
public function sumarDigitos($numerosIngresados):{
    $numero = 67;
    $sumatotal= array_sum($numerosIngresados);
    echo $sumatotal;
    if ($sumatotal == $numero){
        echo "Felicitaciones! Has salvado el tren!";
    }else{
        echo "Has fallado!";
    }
}

}

?>