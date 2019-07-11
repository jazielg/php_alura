<?php

namespace funcionarios;

use abstracts\Funcionario;

class Diretor extends Funcionario
{

    public function getBonificacao() 
    {
        return $this->salario * 0.2;
    }

}
