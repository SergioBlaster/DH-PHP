<?php
require_once("Equipamento.php");

class AspiradorDePo extends Equipamento
{
    public $filtro;

    public function __construct()
    {
        $this->filtro = [];
    }

    public function aspirar()
    {
        if ($this->ligado && count($this->filtro) < 10) {
            array_push($this->filtro, "nova sujeira");
            echo "Adicionando sujeita ao filtro.";
        } else {
            echo "Filtro de sujeira está cheio. Limpe-o.";
        }
    }

    public function limparFiltro()
    {
        foreach ($this->filtro as $key => $value) {
            if ($value) {
                array_pop($this->filtro);
            }
        }

        echo "O filtro de sujeira do aspirador está vazio.";
    }
}
