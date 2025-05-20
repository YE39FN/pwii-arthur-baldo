<form action="exercicio4.php" method="get">
    Valor do Produto: <input type="number" name="valor_produto"> Reais <br> <br>
     <input type="submit">
</form>

<?php
$parcela =  ((($_GET["valor_produto"] / 100) * 16)+ $_GET["valor_produto"])/10;
echo "O valor de uma das parcelas é: R$ ${parcela} <br>"; 


$valor_total = ((($_GET["valor_produto"] / 100 * 16))+ $_GET["valor_produto"]);
echo "O valor total da compra é:  R$ ${valor_total}";

?>