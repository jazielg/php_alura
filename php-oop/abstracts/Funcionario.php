<?php

namespace abstracts;

abstract class Funcionario 
{
    
    private $nome;
    private $cpf;
    protected $salario;
    protected $vale_transporte = 100.00;
    public static $piso = 998.00;

    public function __construct($nome, $cpf, $salario)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->salario = $salario;
    }

    abstract public function getBonificacao();

    public function setValeTransporte($valor) 
    {
        return $this->vale_transporte = $valor;
    }

    final public function aumentarSalario() 
    {
        $this->salario *= 1.1;
        return $this;
    }

    public static function setPiso($valor)
    {
        return self::$piso = $valor;
    }

    public function __set($atributo, $valor) 
    {
        $this->$atributo = $valor;
        return $this;
    }

    public function __get($atributo) 
    {
        return $this->$atributo;
        return $this;
    }

    public function __toString()
    {
        return 'Classe de funcionario da Empresa';
    }
}
