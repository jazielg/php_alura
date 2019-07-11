<?php

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        return "Você não tem saldo suficiente";
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']); // Usando a biblioteca mbstring, que funciona com palavras com acento.
}

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500
);

unset($contasCorrentes['123.456.689-11']); // Excluir elemento do array

titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);

foreach ($contasCorrentes as $cpf => $conta) {
    echo "O titular $conta[titular] tem o valor de {$conta['saldo']} reais." . PHP_EOL; // String Sintaxe complexa
    ['titular' => $titular, 'saldo' => $saldo] = $conta; // list
    echo "$cpf $titular $saldo" . PHP_EOL;
}

// PHP Arrays
$array1 = ['a', 'b', 'c'];
$array2 = ['d', 'e', 'f'];
$string1 = 'A, B, C, D';

echo PHP_EOL . 'sizeof' . PHP_EOL;           print_r(sizeof($array1)); // Tamanho do Array
echo PHP_EOL . 'sort' . PHP_EOL;             print_r(sort($array1)); // Ordenar elementos do Array
echo PHP_EOL . 'explode' . PHP_EOL;          print_r(explode(", ", $string1)); // Transformar string em Array
echo PHP_EOL . 'implode' . PHP_EOL;          print_r(implode(", ", $array1)); // Transformar Array em string
echo PHP_EOL . 'array_diff' . PHP_EOL;       print_r(array_diff($array1, $array2)); // Compara os elementos do array, trazendo os diferentes
echo PHP_EOL . 'array_merge' . PHP_EOL;      print_r(array_merge($array1, $array2)); // Expande o primeiro array com os elementos do segundo array
echo PHP_EOL . 'array_combine' . PHP_EOL;    print_r(array_combine($array1, $array2)); // Criar um array associativo, sendo os primeiro a chave e segundo os valores
echo PHP_EOL . 'array_key_exists' . PHP_EOL; print_r(array_key_exists('a', $array1)); // Verifica se uma chave existe no array
