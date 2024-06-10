<!DOCTYPE html>
<html>
    <body>
        <?php
            //Radio Button
            echo "<br>Seu sistema operacional é: </br>" .$_POST["sistema"] ."<br><br>";

            //Checkbox
            if(isset($_POST["numero"]))
            {
                echo "<br>Os números de sua preferência são: </br><BR>";

                //Faz loop pelo array dos números
                foreach($_POST["numeros"] as $numero)
                {
                    echo ". " . $numero . "<BR><br>";
                }
            }
            else
            {
                echo "<br>Você não escolheu número preferido!</br><br><br>";
            }

            //
            echo "<br>Seu processador é: </br>" . $_POST["processador"] ."<BR>";
        ?>
    </body>
</html>