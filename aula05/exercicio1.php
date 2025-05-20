<form action="exercicio1.php" method="get">
    Distância Total: <input type="number" name="distancia"> KM <br> <br>
    Combustível: <input type="number" name="combustivel"> L <br> <br>
     <input type="submit">
</form>

<?php
$consumo_medio =  $_GET["distancia"] / $_GET["combustivel"];
echo "O consumo médio é: ${consumo_medio}";


?>