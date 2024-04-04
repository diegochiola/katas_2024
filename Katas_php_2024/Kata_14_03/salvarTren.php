<?php
class SalvarTren{

//sumar numero ingresados y compararlo con $numeros y que devuelva true o false
public function sumarDigitos($numerosIngresados, $numeroObjetivo){
    $sumatotal = array_sum($numerosIngresados);
    echo "Suma total: " . $sumatotal ."\n";
    return $sumatotal == $numeroObjetivo;
}


}

