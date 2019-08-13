<?php
  require_once("../config/conn.php");

  $titulo = $_REQUEST["titulo"];
  $descricao = $_REQUEST["descricao"];

  if($_FILES){
    if($_FILES["imagem"]["error"] == UPLOAD_ERR_OK){
      $nomeImg = $_FILES["imagem"]["name"];
      $nomeTemp = $_FILES["imagem"]["tmp_name"];

      // caminho até a pasta atual => pasta utils
      $caminho = dirname(__FILE__);

      // caminho onde desejamos armazenar a imagem
      $caminhoDesejado = "assets/img/uploads/";

      // caminho definitivo onde iremos armazenar a imagem
      $caminhoDefinitivo = str_replace("utils", $caminhoDesejado, $caminho);

      // obtendo caminho e imagem na qual efetuamos upload
      $caminhoCompleto = $caminhoDefinitivo . $nomeImg;
      
      // movendo imagem para o caminho => assets/img/uploads
      move_uploaded_file($nomeTemp, $caminhoCompleto);
    }
  }

  $sql = "INSERT INTO noticias (titulo, descricao, imagem, data_criacao) 
  values (:titulo, :descricao, :imagem, now())";

  $query = $db->prepare($sql);

  $salvou = $query->execute([
      ":titulo" => $titulo,
      ":descricao" => $descricao,
      ":imagem" => $caminhoDesejado.$nomeImg
  ]);

  if (isset($salvou) && $salvou) {
      echo "Notícia cadastrada com sucesso";
  }
  else
  {
      echo "Falha ao processar cadastro de notícia";
  }
