<?php 

    require_once("Veiculo.php");

    class MicroOnibus extends Veiculo{

        public function calcular(){
            return "O veículo Micro-Onibus, foi alugado por R$ " . $this->getValor() . 
            ", rodou " . $this->getKm() . 
            " quilômetros com custo total de R$ " . $this->getValor() * $this->getKm() . "\n";
        }
    }