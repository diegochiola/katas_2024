<?php
class SalvarTren{

//sumar numero ingresados y compararlo con $numeros
public function sumarDigitos($numerosIngresados, $numeroObjetivo){
    $sumatotal = array_sum($numerosIngresados);
    echo "Suma total: " . $sumatotal ."\n";
    if ($sumatotal == $numeroObjetivo){
        echo "Felicitaciones! Has salvado el tren!". "\n";
    }else{
        echo "Has fallado!". "\n";
    }
}


}

