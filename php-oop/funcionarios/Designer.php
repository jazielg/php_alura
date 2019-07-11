<?php

namespace funcionarios;

use abstracts\Funcionario;
use interfaces\Adicional;

class Designer extends Funcionario implements Adicional
{

    public function getBonificacao() 
    {
        return $this->salario * 0.3;
    }

    public function setValeTransporte($valor) 
    {
        return $this->vale_transporte = $valor;
    }

    public function horasExtras(float $valorPorHora, int $horas) : float
    {
        return $valorPorHora * $horas;
    }
    
}
