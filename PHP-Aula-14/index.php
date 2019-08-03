<!DOCTYPE html>
<html lang="en">
<?php require_once("inc/head.php"); ?>

<body>
    <?php require_once("inc/header.php"); ?>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/FreeDelivery.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/Motoboy.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/UberEats.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container mt-5">
        <h1>Cards</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga adipisci aliquam aliquid rerum distinctio quo vitae, voluptatum architecto iure, voluptate minus sequi hic libero officia provident itaque nemo ea debitis.</p>
        <div class="card-deck">
            <div class="card">
                <img src="img/FreeDelivery.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="img/Motoboy.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="img/UberEats.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>

        <form action="utils/salvarContato.php" method="POST" class="mt-5">
            <h1>Preencha o formulário para entrar em contato</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas quisquam accusamus possimus maiores eveniet tempore excepturi, dicta vel, explicabo officiis sunt similique, amet deserunt magnam expedita corrupti et dolores aliquid?</p>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="input-nome">Nome</label>
                    <input name="nome" type="text" class="form-control" id="input-nome" placeholder="Nome">
                </div>
                <div class="form-group col-md-6">
                    <label for="input-email">E-mail</label>
                    <input name="email" type="email" class="form-control" id="input-email" placeholder="E-mail">
                </div>
                <div class="form-group col-md-6">
                    <label for="input-senha">Senha</label>
                    <input name="senha" type="password" class="form-control" id="input-senha" placeholder="Senha">
                </div>
                <div class="form-group col-md-6">
                    <label for="input-confirma">Confirma Senha</label>
                    <input name="confirma_senha" type="password" class="form-control" id="input-confirma" placeholder="Senha">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

    </div>

</body>

</html>