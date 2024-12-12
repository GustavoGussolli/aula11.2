<?php 

    abstract class Veiculo{

        private float $valor;
        private int $km;

        abstract public function calcular();

        /**
         * Get the value of valor
         */
        public function getValor(): float
        {
                return $this->valor;
        }

        /**
         * Set the value of valor
         */
        public function setValor(float $valor): self
        {
                $this->valor = $valor;

                return $this;
        }

        /**
         * Get the value of km
         */
        public function getKm(): int
        {
                return $this->km;
        }

        /**
         * Set the value of km
         */
        public function setKm(int $km): self
        {
                $this->km = $km;

                return $this;
        }
    }