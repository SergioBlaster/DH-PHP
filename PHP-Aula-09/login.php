<?php
require "utils/funcoesLogin.php";
include "inc/head.php";

if ($_REQUEST) {
  $email = $_REQUEST["email"];
  $senha = $_REQUEST["senha"];
  $usuarioLogado = logarUsuario($email, $senha);
  $estaLogado = $usuarioLogado["logado"];
}

?>
<div class="page-center">
  <h1>Login</h1>

  <?php if (isset($estaLogado) && !$estaLogado) : ?>
    <div class="alert alert-danger" role="alert">
      <span>Email ou senha incompatíveis</span>
    </div>
  <?php elseif (isset($estaLogado) && $estaLogado) :
    session_start();
    $_SESSION["logado"] = true;
    $_SESSION["email"] = $email;
    $_SESSION["nome"] = $usuarioLogado["nome"];
    $_SESSION["nivelAcesso"] = $usuarioLogado["nivelAcesso"];
    header("Location: index.php");
  endif;
  ?>

  <form action="login.php" method="post" class="col-md-7">
    <div class="col-md-12">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Insira seu email">
    </div>
    <div class="col-md-12">
      <label for="exampleInputSenha">Senha</label>
      <input type="password" name="senha" class="form-control" id="exampleInputSenha" placeholder="Insira sua senha">
    </div>
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Logar</button>
      <a class="col-md-offset-9" href="cadastro.php">Fazer cadastro!</a>
    </div>
  </form>
</div>
<?php include "inc/footer.php"; ?>