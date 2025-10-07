<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>teste</title>
    </head>
    <body>
        <form action="teste.php" method="post">
            Nome: <input type="text" name="nome"><br>
            Idade: <input type="number" name="idade"><br>
            CPF: <input type="text" name="cpf"><br>
             <input type="submit" value="Roubar sua casa"><br>
        </form>
    </body>
</html>

    <?php

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $cpf = $_POST ['cpf'];

        echo "Nome: ${nome}<br>";
        echo "Idade: ${idade}<br>";
        echo "CPF: ${cpf}<br>";


    ?>