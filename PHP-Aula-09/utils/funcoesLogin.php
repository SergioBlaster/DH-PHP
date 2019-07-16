<?php
$nomeArquivo = "usuarios.json";

function cadastrarUsuario($usuario)
{
    global $nomeArquivo;

    $jsonUsuarios = file_get_contents($nomeArquivo);
    $arrayUsuarios = json_decode($jsonUsuarios, true);

    array_push($arrayUsuarios["usuarios"], $usuario);

    $jsonUsuarios = json_encode($arrayUsuarios, JSON_UNESCAPED_SLASHES);
    $cadastrou = file_put_contents($nomeArquivo, $jsonUsuarios);

    return $cadastrou;
}

function logarUsuario($email, $senha)
{
    global $nomeArquivo;

    $jsonUsuarios = file_get_contents($nomeArquivo);
    $arrayUsuarios = json_decode($jsonUsuarios, true);
    
    $retorno = [
        "nome" => "",
        "email" => "",
        "nivelAcesso" => 0,
        "logado" => false
    ];

    foreach ($arrayUsuarios["usuarios"] as $key => $value) {
        if ($email == $value["email"] && password_verify($senha, $value["senha"])) {
            $retorno["nome"] = $value["nome"];
            $retorno["email"] = $value["email"];
            $retorno["nivelAcesso"] = $value["nivelAcesso"];
            $retorno["logado"] = true;
            break;
        }
    }

    return $retorno;
}
