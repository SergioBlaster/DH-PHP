<?php class Pendrive
{
    public $listaDeMusicas;
    public $nome;

    public function __construct()
    {
        $this->nome = "Minhas músicas";
        $this->listaDeMusicas = [];
    }
}
