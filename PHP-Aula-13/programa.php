<?php
require_once("ControleRemoto.php");
require_once("Conta.php");

$controleRemoto = new ControleRemoto();
$controleRemoto->ligar();
$controleRemoto->ligar();
$controleRemoto->aumentarVolume();
$controleRemoto->aumentarVolume();
$controleRemoto->diminuirVolume();
$controleRemoto->diminuirVolume();
$controleRemoto->diminuirVolume();
$controleRemoto->desligar();
$controleRemoto->diminuirVolume();
$controleRemoto->aumentarVolume();
$controleRemoto->ligar();
$controleRemoto->aumentarVolume();
$controleRemoto->ativarMudo();
$controleRemoto->ativarMudo();
$controleRemoto->desativarMudo();
$controleRemoto->desativarMudo();

echo "<hr>";
$conta = new Conta();
$conta->setNomeConta("Abirosvaldo");
$conta->setTipoConta("cc");
$conta->abrirConta();
$conta->depositar(1000);

