<?php
require_once("../config/conn.php");

$nome = $_REQUEST["nome"];
$email = $_REQUEST["email"];
$senha = $_REQUEST["senha"];
$confirma_senha = $_REQUEST["confirma_senha"];

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";

$query = $db->prepare($sql);

$salvou = $query->execute([
    ":nome"=>$nome,
    ":email"=>$email,
    ":senha"=>$senha
]);

if (isset($salvou) && $salvou == true) {
    echo "Salvo com sucesso";
}
