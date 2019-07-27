<?php
require_once("Controlador.php");

class ControleRemoto implements Controlador
{
    private $volume;
    private $ligado;

    function __construct()
    {
        $this->volume = 0;
        $this->ligado = false;
    }

    function getVolume()
    {
        return $this->volume;
    }

    function setVolume($volume)
    {
        $this->volume = $volume;
    }

    function getLigado()
    {
        return $this->ligado;
    }

    function setLigado($ligado)
    {
        $this->ligado = $ligado;
    }

    public function ligar()
    {
        if (!$this->getLigado()) {
            $this->setLigado(true);
            echo "<p>O aparelho foi ligado</p>";
        } else {
            echo "<p>O aparelho já estava ligado</p>";
        }
    }

    public function desligar()
    {
        if ($this->getLigado()) {
            $this->setLigado(false);
            echo "<p>O aparelho foi desligado</p>";
        } else {
            echo "<p>O aparelho já estava desligado</p>";
        }
    }

    public function aumentarVolume()
    {
        if ($this->getLigado()) {
            if ($this->getVolume() < 50) {
                $this->setVolume($this->getVolume() + 1);
                echo "<p>Aumentou volume para: " . $this->getVolume() . "</p>";
            } else {
                echo "<p>Aparelho já está no volume máximo: 50</p>";
            }
        } else {
            echo "<p>Impossível aumentar volume: Aparelho desligado</p>";
        }
    }

    public function diminuirVolume()
    {
        if ($this->getLigado()) {

            if ($this->getVolume() === 0) {
                echo "<p>Aparelho já está no volume mínimo: 0</p>";
            } else {
                $this->setVolume($this->getVolume() - 1);
                echo "<p>Diminuiu volume para: " . $this->getVolume() . "</p>";
            }
        } else {
            echo "<p>Impossível diminuir volume: Aparelho desligado</p>";
        }
    }

    public function ativarMudo()
    { 
        if ($this->getLigado()) {

            if ($this->getVolume() === 0) {
                echo "<p>Aparelho já está no volume mínimo: 0</p>";
            } else {
                $this->setVolume(0);
                echo "<p>Ativando mudo. Volume atual: " . $this->getVolume() . "</p>";
            }
        } else {
            echo "<p>Impossível ativar mudo: Aparelho desligado</p>";
        }
    }

    public function desativarMudo()
    { 
        if ($this->getLigado()) {

            if ($this->getVolume() > 0) {
                echo "<p>Aparelho já está com mudo desativado. Volume atual: " . $this->getVolume() . "</p>";
            } else {
                $this->setVolume(20);
                echo "<p>Desativando mudo. Volume atual: " . $this->getVolume() . "</p>";
            }
        } else {
            echo "<p>Impossível ativar mudo: Aparelho desligado</p>";
        }
    }
}
