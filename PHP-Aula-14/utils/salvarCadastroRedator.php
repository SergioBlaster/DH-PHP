<?php
  require_once("../config/conn.php");

  $nome = $_REQUEST["nome"];
  $email = $_REQUEST["email"];
  $senha = $_REQUEST["senha"];

  $sql = "INSERT INTO usuarios (nome, email, senha, nivel_acesso) VALUES (:nome, :email, :senha, :nivel_acesso)";

  $query = $db->prepare($sql);

  $salvou = $query->execute([
    ":nome" => $nome,
    ":email" => $email,
    ":senha" => password_hash($senha, PASSWORD_DEFAULT),
    ":nivel_acesso" => 0
  ]);

  if(isset($salvou) && $salvou == true){
    echo "Redator salvo com sucesso.";
  } else { 
    echo "Falha ao tentar salvar redator.";
  }
  
?>