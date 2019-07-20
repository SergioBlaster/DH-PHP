<?php
require_once("AspiradorDePo.php");
require_once("Pendrive.php");
require_once("AparelhoDeSom.php");

$aspiradorDePo = new AspiradorDePo();
$aspiradorDePo->ligar();
echo "<br>";
$aspiradorDePo->aspirar();
echo "<br>";
$aspiradorDePo->limparFiltro();
echo "<br>";
$aspiradorDePo->desligar();

echo "<hr>";
$pendrive = new Pendrive();
$pendrive->listaDeMusicas = ["Fio de Cabelo", "Evidências", "Entre Tapas e Beijos"];

$aparelhoDeSom = new AparelhoDeSom();
echo "<br>";
$aparelhoDeSom->ligar();
echo "<br>";
$aparelhoDeSom->conectar($pendrive);
echo "<br>";
$aparelhoDeSom->aumentarVolume(18);
echo "<br>";
$aparelhoDeSom->aumentarVolume(21);
echo "<br>";
$aparelhoDeSom->diminuirVolume(18);
echo "<br>";
$aparelhoDeSom->diminuirVolume(21);

