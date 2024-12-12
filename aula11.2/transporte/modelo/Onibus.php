<?php 

    require_once("Veiculo.php");

    class Onibus extends Veiculo{

        public function calcular(){
            return "O veículo Onibus, foi alugado por R$ " . $this->getValor() . 
            ", rodou " . $this->getKm() . 
            " quilômetros com custo total de R$ " . $this->getValor() * $this->getKm() . "\n";
        }
    }