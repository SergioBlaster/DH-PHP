<?php
require_once('../config/conn.php');

$email = $_REQUEST['email'];
$senha = $_REQUEST['senha'];

$sql = "SELECT * FROM usuarios WHERE email = :email";

$query = $db->prepare($sql);

$query->execute([
    ":email" => $email
]);

$usuario = $query->fetch(PDO::FETCH_ASSOC);

if (!$usuario) {
    $erro = true;
} else {
    if ($senha !== $usuario['senha']) {
        $erro = true;
    } else {
        session_start();

        $_SESSION["logado"] = true;
        $_SESSION["nome"] = $usuario["nome"];
        $_SESSION["nivel_acesso"] = $usuario["nivel_acesso"];

        header("Location: ../index.php");
    }
}

if (isset($erro) && $erro === true){
    echo "Usuário não cadastrado";
}
