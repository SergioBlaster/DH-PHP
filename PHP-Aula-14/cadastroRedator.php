<!DOCTYPE html>
<html lang="en">
<?php require_once("inc/head.php"); ?>

<body>
    <?php require_once("inc/header.php") ?>

    <div class="container">
        <div class="mt-5">
            <form action="utils/salvarCadastroRedator.php" method="POST">
                <h1>Cadastro de redator</h1>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="input-nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="input-nome" placeholder="Insira o nome">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="input-nome">E-mail</label>
                        <input type="text" class="form-control" name="email" id="input-email" placeholder="Insira o e-mail">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="input-email">Senha</label>
                        <input type="password" class="form-control" name="senha" id="input-senha">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>

    <?php require_once("inc/footer.php"); ?>
</body>

</html>