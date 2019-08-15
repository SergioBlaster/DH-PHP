<?php

    $dsn = 'mysql:host=localhost;dbname=aula_pdo;charset=utf8mb4;port=8889';
    $db_user = 'sergioblaster';
    $db_pass = 'sergioblaster';

    try {
        $db = new PDO($dsn, $db_user, $db_pass);
    }
    catch(PDOException $Exception) {
        echo $Exception->getMessage(); 
    }   

?>