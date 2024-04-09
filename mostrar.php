<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibe as informações</title>

    <?php
    
    $userLoggedIn = true;

    $cssFilePath = $userLoggedIn ? "styles_logged_in.css" : "styles.css";
    
    echo "<link rel='stylesheet' href='$cssFilePath'>";
    ?>

</head>
<body>

    <?php
    echo "<h3>EXIBE AS INFORMAÇÕES </h3>";
    echo "<hr>";
    
    $Nome = $_POST["nome"];
    $Data = $_POST["data"];
    $Salario = $_POST["salario"];
    $Cargo = $_POST["cargo"];
    $INSS = $_POST["PercentualAumento"];

    echo "Nome do Funcionário: " .$Nome;
    echo "<br>Data de Admissão: " .$Data;
    echo "<br>Salário: " .$Salario;
    echo "<br>Cargo: " .$Cargo;
    echo "<br>% INSS: " .$INSS . "%";
    echo "<hr>";

    echo "<marquee behavior='alternate'>Desenvolvido por Marcelo - &copy; 2024</marquee>";

    ?>
</body>
</html>