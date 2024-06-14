<!DOCTYPE html>
<html>
    <body>
        <?php
        require_once "carro.php";

        //Instanciando a classe carro
        $carro = new Carro("V8","Aro 15","Esportivo");

        //Exibindo as informações da classe carro
        $carro->exibirInformacoes();
        $carro->velocidadeMax();
        echo "<br>";
        ?>
    </body>
</html>