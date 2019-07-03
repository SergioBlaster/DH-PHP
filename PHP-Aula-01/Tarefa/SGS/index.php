<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-Aula 01-Tarefa</title>
</head>

<body>
    <?php
    $varInteiro = 100;
    $varDecimal = 10.10;
    $varAspasDuplas = "Aspas Duplas";
    $varAspasSimples = 'Aspas Simples';

    echo $varInteiro;
    echo " ";
    var_dump($varInteiro);
    echo " - ";

    echo $varDecimal;
    echo " ";
    var_dump($varDecimal);
    echo " - ";

    echo $varAspasDuplas;
    echo " ";
    var_dump($varAspasDuplas);
    echo " - ";    

    echo $varAspasSimples;
    echo " ";
    var_dump($varAspasSimples);
    echo " - ";    

    echo $varAspasSimples . $varAspasDuplas;

?>

</body>

</html>