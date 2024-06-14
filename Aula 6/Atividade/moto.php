<?php
require_once "veiculo.php";

class Moto extends Veiculo {
    // Propriedade do Moto
    private $guidao;

    //Método acelerar herdado da classe pai (Veículo)
    public function velocidadeMax()
    {
        echo "A Velocidade Máxima deste veículo é 160 km/h.";
    }

    // Método construtor para a classe Moto
    public function __construct($motor, $pneu, $guidao)
    {   
        // Construtor da classe pai (Veículos)
        parent::_construct($motor, $pneu);
        $this->guidao = $guidao;
    }
    //Método para exibir as informações da classe Moto
    public function exibirInformacoes()
    {
        //Exibindo informações usando o método exibirInformacoes que foi herdado da classe Veiculo
        parent::exibirInformacoes();
        echo "Guidão: " .$this->guidao. "<br>";
    }
    
}
?>