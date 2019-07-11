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
sizeof(array1); // Tamanho do Array
sort(array1); // Ordenar elementos do Array
explode(", ", string1); // Transformar string em Array
implode(", ", array1); // Transformar Array em string
array_diff(array1, array2); // Compara os elementos do array, trazendo os diferentes
array_merge(array1, array2); // Expande o primeiro array com os elementos do segundo array
array_combine(keys, values); // Criar um array associativo, sendo os primeiro a chave e segundo os valores
array_key_exists(key, array1); // Verifica se uma chave existe no array
