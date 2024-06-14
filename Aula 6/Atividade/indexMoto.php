<!DOCTYPE html>
<html>
    <body>
        <?php
        require_once "moto.php";

        //Instanciando a classe carro
        $moto = new Moto("Bicilindrico","Aro 13","Drag Bar");

        //Exibindo as informações da classe carro
        $moto->exibirInformacoes();
        $moto->velocidadeMax();
        echo "<br>";
        ?>
    </body>    
</html>