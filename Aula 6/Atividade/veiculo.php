<?php
    class Veiculo{
        //Propriedades da classe Veículos
        public $motor;
        public $pneu;
        public function velocidadeMax(){
            echo "Velocidade Máxima é 100 km/h";
        }

        //Construtor da classe Veículos
        public function _construct($motor,$pneu){
            $this->motor = $motor;
            $this->pneu = $pneu;
        }
        //Método para exibir as informações do Veículo
        public function exibirInformacoes(){
            echo "Motor: ".$this->motor ."<br>";
            echo "Pneu: ".$this->pneu ."<br>";
        }   
    }
?>