<?php
require_once("Animal.php");

class Peixe extends Animal
{
    private $corDeEscamas;

    public function getCorDeEscamas()
    {
        return $this->corDeEscamas;
    }

    public function setCorDeEscamas($corDeEscamas)
    {
        $this->corDeEscamas = $corDeEscamas;
    }

    public function locomover()
    {
        echo "<p>Nadando</p>";
    }

    public function alimentar()
    {
        echo "<p>Comendo algas</p>";
    }

    public function emitirSom()
    {
        echo "<p>Som de peixe</p>";
    }

    public function soltarBolha()
    {
        echo "<p>Soltei uma bolha</p>";
    }
}
