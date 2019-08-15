<?php
  require_once("../config/conn.php");

  $id = $_REQUEST["id"];
  $nome = $_REQUEST["nome"];
  $email = $_REQUEST["email"];
  $senha = $_REQUEST["senha"];

  $sql = "UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id = :id"; 

  $query = $db->prepare($sql);

  $salvou = $query->execute([
    ":nome" => $nome,
    ":email" => $email,
    ":senha" => password_hash($senha, PASSWORD_DEFAULT),
    ":id" => $id
  ]); 

  if(isset($salvou) && $salvou == true){
    echo "Usuário salvo com sucesso";
  } else {
    echo "Falha ao processar edição do usuário";
  }
  
?>
