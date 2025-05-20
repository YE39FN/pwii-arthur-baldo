<form action="exercicio3.php" method="get">
    Base Menor: <input type="number" name="base_menor"> cm <br> <br>
    Base Maior: <input type="number" name="base_maior"> cm <br> <br>
    Altura: <input type="number" name="altura"> cm <br> <br>
     <input type="submit">
</form>

<?php
$area =  ($_GET["base_menor"] + $_GET["base_maior"] * $_GET["altura"]) / 2;
echo "A área do trapézio é: ${area} cm²";


?>