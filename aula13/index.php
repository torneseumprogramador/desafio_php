<?php
    error_reporting(0);
?>

<!DOCTYPE html> <!-- Declaração do tipo de documento -->
<html>
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres para UTF-8 (Unicode) -->
    <title>Desafio de PHP</title> <!-- Título da página exibido na aba do navegador -->
</head>
<body>
    <h1>Bem vindo <?php echo "{$_POST["nome"]} {$_POST["sobrenome"]}" ?></h1>

    <?php
    error_reporting(0);

    echo "Ola .... teste <br>";

    $x = 30;
    $y = 60;

    echo "O resultado da operacao e: " . ($x * $y) . "<br>";  

    ?>

    <h3>
        Um teste com codigo HTML + codigo do PHP, 
        <?php echo "Aqui estou escrevendo do PHP" ?> 
    <h3>

    <form action="index.php" method="post">
        <div>
            <input type="text" placeholder="Digite o nome" name="nome" value="<?php echo $_POST["nome"] ?>"/>
            <input type="text" placeholder="Digite o sobrenome" name="sobrenome" value="<?php echo $_POST["sobrenome"] ?>"/>
        </div>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
