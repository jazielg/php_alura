<?php

ini_set('display_errors', 1);

require_once 'abstracts/Funcionario.php';
require_once 'interfaces/Adicional.php';
require_once 'funcionarios/Designer.php';
require_once 'funcionarios/Diretor.php';

use abstracts\Funcionario;
use funcionarios\{ Designer, Diretor };

// Chamar um metodo estatico
Funcionario::setPiso(1048);
// Retornar um valor da variavel estatica
echo Funcionario::$piso; echo '<br><br>';

// Um nova instancia de Designer
$joao = new Designer('Joao', '123', 1000.00);

// Utilizando classe abstrata (todas as classes com extends tem que implementar) para retorna bonificacao
var_dump($joao->getBonificacao()); echo '<br><br>';

// Utilizando final (metodo que não pode ser sobrescrito) para aumentar salario
$joao->aumentarSalario();

// Utilizando o metodo magico __set para atribuir um valor para o atributo privado.
$joao->nome = "Marcos";
// Utilizando o metodo magico __get para retornar o valor do atributo privado
echo $joao->nome; echo '<br><br>';

// Utilizando a interface (todas as classes com implements tem que implementar) para retornar valor total de horas extras
var_dump($joao->horasExtras(15.00, 8)); echo '<br><br>';

// O metodo retornando $this, pode-se fazer um encadeamento de funções
echo $joao->aumentarSalario()->getBonificacao(); echo '<br><br>';

// Utilizando o metodo magico __toString para retornar uma string ao chamar a classe
echo $joao; echo '<br><br>';

// Polimorfismo, sobrescrito do metodo da classe mae, o vale transporte vai se diferente para cada funcionario.
$joao->setValeTransporte(200.00);

var_dump($joao);
