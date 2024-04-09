<?php

class Enfrentamiento
{

    public $luchador1;
    public $luchador2;

    public function __construct($luchador1, $luchador2)
    {
        $this->luchador1 = $luchador1;
        $this->luchador2 = $luchador2;
    }
    public function probabilidadDeGolpe($fuerza1, $fuerza2){
        if ($fuerza1 == $fuerza2){
            return 0.5;
        }else if ($fuerza1 > $fuerza2){
            return 0.7;
        }else{
            return 0.3;
        }
    }
    
    public function enfrentamiento(){
        $ronda= 1;
        while($this->luchador1->estaVivo() && $this->luchador2->estaVivo()){
            echo "Ronda: ".$ronda . PHP_EOL;
            //$ronda++;
            //orden
            if($this->jugador1->getFuerza() >= $this->luchador2->getFuerza()){
                $atacante = $this->luchador1;
                $defensor = $this->luchador2;
            }else{
               $atacante = $this->luchador2;
               $defensor = $this->luchador1; 
            }
            //ataque
            $perjuicio = $atacante->atacar();
            $defensor->recibirGolpe($perjuicio);
            echo "{$atacante->nombre} ataca a {$defensor->nombre} y genera $perjuicio puntos de perjuicio sobre {$defensor->nombre} " . PHP_EOL;

            $ronda++;
        }

            if(!$this->luchador1->estaVivo()){
                echo "{$this->luchador1->nombre} es el ganador del enfrentamiento" . PHP_EOL;
            }else{
                echo "{$this->luchador2->nombre} es el ganador del enfrentamiento" . PHP_EOL;
            }
            echo "Enfrentamiento finalizado" . PHP_EOL;

    }
        
    
}
