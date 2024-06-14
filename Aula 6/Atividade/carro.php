<?php
require_once "veiculo.php";

class Carro extends Veiculo {
    // Propriedade do Carro
    private $volante;

    //Adicionando método velocidadeMax herdada da classe pai (Veículo)
    public function velocidadeMax()
    {
        echo "A velocidade máxima deste veículo é 200 km/h.";
    }

    // Método construtor para a classe Carro
    public function __construct($motor, $pneu,$volante)
    {   
        // Construtor da classe pai (Veículos)
        parent::_construct($motor, $pneu);
        $this->volante = $volante;
    }
    //Método para exibir as informações da classe Carro
    public function exibirInformacoes()
    {
        //Exibindo informações usando o método exibirInformacoes que foi herdado da classe Veiculo
        parent::exibirInformacoes();
        echo "Volante: " .$this->volante. "<br>";
    }
    
}
?>
