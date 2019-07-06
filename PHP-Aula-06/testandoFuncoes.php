<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testando Funções</title>
</head>

<body>
    <?php
    $mystring = 'abc';
    $findme   = 'a';
    $pos = strpos($mystring, $findme);
    echo "strpos: $pos <br>";

    $email  = 'name@example.com';
    $domain = strstr($email, '@');
    echo "strstr: $domain <br>"; // prints @example.com

    $user = strstr($email, '@', true); // As of PHP 5.3.0
    echo "strstr: $user <br>"; // prints name

    $str = 'abcdef';
    echo "strlen: " . strlen($str) . "<br>"; // 6

    $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    $onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
    echo "str_replace: $onlyconsonants <br>";

    $numeros[0] = 0;
    $numeros[1] = 3;
    $numeros[2] = 5;
    $contandoNumeros = count($numeros);
    echo "count: $contandoNumeros <br>";

    $var = 10;
    if (isset($var)) {
        echo "This var is set so I will print.";
    }
    echo isset($var);
    ?>
</body>

</html>