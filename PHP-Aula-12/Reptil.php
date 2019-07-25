<?php
require_once("Animal.php");

class Reptil extends Animal
{ 
    private $corDePele;

    public function getCorDePele()
    {
        return $this->corDePele;
    }

    public function setCorDePele($corDePele)
    {
        $this->corDePele = $corDePele;
    }

    public function locomover()
    {
        echo "<p>Restejando</p>";
    }

    public function alimentar()
    {
        echo "<p>Alimentado-se</p>";
    }

    public function emitirSom()
    {
        echo "<p>Som de réptil</p>";
    }
}
