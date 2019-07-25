<?php
// Classes Modelo
require_once("Mamifero.php");
require_once("Ave.php");
require_once("Peixe.php");
require_once("Reptil.php");

// Classes Filhas
require_once("Cachorro.php");
require_once("Arara.php");
require_once("Tilapia.php");
require_once("Tartaruga.php");

echo "<h1>Mamífero</h1>";
$mamifero = new Mamifero();
$mamifero->setCorDePelos("Branca");
echo "Cor de pelos: ". $mamifero->getCorDePelos();
$mamifero->locomover();
$mamifero->alimentar();
$mamifero->emitirSom();
echo "<hr>";

echo "<h1>Cachorro</h1>";
$cachorro = new Cachorro();
$cachorro->locomover();
$cachorro->alimentar();
$cachorro->emitirSom();
echo "<hr>";

echo "<h1>Ave</h1>";
$ave = new Ave();
$ave->setCorDePenas("Amarela");
echo "Cor de penas: " . $ave->getCorDePenas();
$ave->locomover();
$ave->alimentar();
$ave->emitirSom();
echo "<hr>";

echo "<h1>Arara</h1>";
$arara = new Arara();
$arara->setCorDePenas("Azul");
echo "Cor de penas: " . $arara->getCorDePenas();
$arara->locomover();
$arara->alimentar();
$arara->emitirSom();
echo "<hr>";

echo "<h1>Peixe</h1>";
$peixe = new Peixe();
$peixe->setCorDeEscamas("Cinza");
echo "Cor de escamas: " . $peixe->getCorDeEscamas();
$peixe->locomover();
$peixe->alimentar();
$peixe->emitirSom();
$peixe->soltarBolha();
echo "<hr>";

echo "<h1>Tilápia</h1>";
$tilapia = new Tilapia();
$tilapia->setCorDeEscamas("Roxo");
echo "Cor de escamas: " . $tilapia->getCorDeEscamas();
$tilapia->locomover();
$tilapia->alimentar();
$tilapia->emitirSom();
$tilapia->soltarBolha();
echo "<hr>";

echo "<h1>Réptil</h1>";
$reptil = new Reptil();
$reptil->setCorDePele("Verde");
echo "Cor de pele: " . $reptil->getCorDePele();
$reptil->locomover();
$reptil->alimentar();
$reptil->emitirSom();
echo "<hr>";

echo "<h1>Tartaruga</h1>";
$tartaruga = new Tartaruga();
$tartaruga->setCorDePele("Marron");
echo "Cor de pele: " . $tartaruga->getCorDePele();
$tartaruga->locomover();
$tartaruga->alimentar();
$tartaruga->emitirSom();
echo "<hr>";


