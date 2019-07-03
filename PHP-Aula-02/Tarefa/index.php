<?php
$numeroUm = 10;
$numeroDois = 20;
$maiorValor = 0;

if ($numeroUm > $numeroDois) {
    $maiorValor = $numeroUm;
} else
    $maiorValor = $numeroDois;


$valorRandomico = mt_rand(1, 5);
$valorAte100 = mt_rand(0, 100);

$idade = 46;
$casado = false;
$sexo = "Masculino";

$quantidadeDeAlunos = -100;

$numero = 11;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP - Aula 02 - Tarefa</title>
</head>

<body>
    <ol>
        <li>O maior valor é:
            <?php echo $maiorValor; ?>
        </li>

        <li>
            <?php if ($valorRandomico >= 3 && $valorRandomico <= 5) { ?>
                Valor randômico está entre 3 e 5: <?php echo $valorRandomico;
                                                } ?>
        </li>

        <li>
            <?php if ($valorRandomico === 3) {
                echo $valorRandomico;
            } else { ?>O número randômico não é 3<?php } ?>
        </li>

        <li>
            <?php if ($valorAte100 > 50) { ?>
                O número é maior que 50: <?php echo $valorAte100;
                                        } else { ?>O número é menor que 50: <?php echo $valorAte100;
                                                                            } ?>
        </li>

        <li>
            <?php if ($valorAte100 > 50 && $valorAte100 % 2 == 0) { ?>
                O número cumpre a condição: <?php echo $valorAte100;
                                        } else { ?>O número NÃO cumpre a condição: <?php echo $valorAte100;
                                                                                    } ?>
        </li>

        <li>
            <?php if ($idade > 18 && !$casado) { ?>Boas vindas<?php } ?>
        </li>

        <li>
            <?php if ($quantidadeDeAlunos) {
                echo "true";
            } else {
                echo "false";
            } ?>
        </li>

        <li>
            <?php $quantidadeDeAlunos = 0;

            if ($quantidadeDeAlunos) {
                echo "true";
            } else {
                echo "false";
            } ?>
        </li>

        <li>
            <?php echo ($numero % 2 == 0) ? "O número é par" : "O número é ímpar"; ?> 
        </li>
        </ul>
</body>

</html>