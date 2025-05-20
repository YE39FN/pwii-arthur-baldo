<form action="exercicio2.php" method="get">
    Comprimento: <input type="number" name="comprimento"> cm <br> <br>
    Largura: <input type="number" name="largura"> cm <br> <br>
    Altura: <input type="number" name="altura"> cm <br> <br>
     <input type="submit">
</form>

<?php
$volume =  $_GET["comprimento"] * $_GET["largura"] * $_GET["altura"];
echo "O volume é: ${volume} cm³";


?>
