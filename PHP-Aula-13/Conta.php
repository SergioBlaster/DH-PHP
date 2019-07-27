<?php
class Conta
{
    public $codigoDaConta;
    protected $nomeConta;
    private $saldo;
    private $tipoConta;
    private $situacao;
    private $tarifa;

    function __construct()
    {
        $this->situacao = false;
        $this->saldo = 0;
    }

    function setCodigoDaConta($codigo)
    {
        $this->codigoDaConta = $this->codigoDaConta + $codigo;
    }

    function getNomeConta()
    {
        return $this->nomeConta;
    }

    function setNomeConta($nomeConta)
    {
        $this->nomeConta = $nomeConta;
    }

    function getSaldo()
    {
        return $this->saldo;
    }

    function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    function getTipoConta()
    {
        return $this->tipoConta;
    }

    function setTipoConta($tipoConta)
    {
        $this->tipoConta = $tipoConta;
    }

    function getSituacao()
    {
        return $this->situacao;
    }

    function setSituacao($situacao)
    {
        $this->situacao = $situacao;
    }

    function getTarifa()
    {
        return $this->tarifa;
    }

    function setTarifa($tarifa)
    {
        $this->tarifa = $tarifa;
    }

    function abrirConta()
    {
        if ($this->getNomeConta() != null && $this->getTipoConta() != null) {
            $this->setCodigoDaConta(1);
            $this->setSituacao(true);
        } else {
            echo "<p>Você necessita informar seu nome e um tipo de conta</p>";
        }

        if ($this->getSaldo() == 0 && $this->getTipoConta() == "cc") {
            $this->setTarifa(10);
            $this->setSaldo(100);
        } else {
            if ($this->getSaldo() == 0 && $this->getTipoConta() == "cp") {
                $this->setTarifa(20);
                $this->setSaldo(200);
            }
        }

        echo "<p>Conta criada com sucesso</p>";
    }

    function depositar($valor){
        if ($this->getSituacao()){
            $this->setSaldo($this->getSaldo() + $valor);
            echo "<p>O valor foi depositado com sucesso. Saldo atual: " . $this->getSaldo() . "</p>";
        }
        else{
            echo "<p>Conta está cancelada. Não foi possível realizar depósito.</p>";
        }
    }
}
