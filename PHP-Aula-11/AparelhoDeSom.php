<?php
require_once("Equipamento.php");

class AparelhoDeSom extends Equipamento
{
    private $volume;
    private $numeroDeFaixa;
    private $usb;

    public function __construct()
    {
        $this->volume = 0;
        $this->numeroDeFaixa = 1;
    }

    public function conectar($penDrive)
    {
        $this->usb = $penDrive;
        echo "O pendrive " . $this->usb->nome . " foi conectado.";
    }

    public function aumentarVolume($valorVolume)
    {
        $this->volume += $valorVolume;

        if ($this->ligado && $this->volume <= 20) {
            echo "O valor do seu volume atualmente é $this->volume";
        } else if ($this->ligado) {
            $this->volume = 20;
            echo "Você está no volume máximo que é $this->volume";
        }
    }

    public function diminuirVolume($valorVolume)
    {
        $this->volume -= $valorVolume;

        if ($this->ligado && $this->volume >= 0) {
            echo "O valor do seu volume atualmente é $this->volume";
        } else if ($this->ligado) {
            $this->volume = 0;
            echo "Você está no volume mínimo que é $this->volume";
        }
    }

    public function reproduzir()
    {
        if ($this->ligado && isset($this->usb)) {
            if ($this->numeroDeFaixa > 0 && $this->numeroDeFaixa <= count($this->usb->listaDeMusicas)) {
                echo "Reproduzindo faixa " . $this->numeroDeFaixa . ": " . $this->usb->listaDeMusicas[$this->numeroDeFaixa - 1];
            } else {
                echo "Faixa selecionada (" . $this->numeroDeFaixa . ") inválida.";
            }
        } else {
            echo "Aparelho de som desligado ou USB não conectado.";
        }
    }

    public function avancarFaixa()
    {
        if ($this->ligado && isset($this->usb)) {
            if ($this->numeroDeFaixa >= count($this->usb->listaDeMusicas)) {
                echo "Você já está na última faixa.";
            } else {
                $this->numeroDeFaixa++;
                echo "Você mudou para a faixa " . $this->numeroDeFaixa;
            }
        } else {
            echo "Aparelho de som desligado ou USB não conectado.";
        }
    }

    public function voltarFaixa()
    {
        if ($this->ligado && isset($this->usb)) {
            if ($this->numeroDeFaixa <= 1) {
                echo "Você já está na primeira faixa.";
            } else {
                $this->numeroDeFaixa--;
                echo "Você mudou para a faixa " . $this->numeroDeFaixa;
            }
        } else {
            echo "Aparelho de som desligado ou USB não conectado.";
        }
    }
}
