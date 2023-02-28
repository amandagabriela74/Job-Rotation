<?php

// Armazenando o arquivo Json em uma variável
$json = file_get_contents('dados.json');

// Decodificando o JSON para um array associativo
$dados = json_decode($json, true);

// Inicializando as variáveis com os primeiros valores do vetor
$menorValor = $dados[0]['valor'];
$maiorValor = $dados[0]['valor'];
$soma = 0;
$diasAcimaDaMedia = 0;

// Percorrendo o vetor de dados e fazendo a verificação
foreach ($dados as $dia) {
    if ($dia['valor'] < $menorValor) {
        $menorValor = $dia['valor'];
    }
    if ($dia['valor'] > $maiorValor) {
        $maiorValor = $dia['valor'];
    }

    $soma += $dia['valor'];
}

// Calculando a média mensal
$media = $soma / count(array_filter($dados, function($dia) {
    return $dia['valor'] > 0;
}));

// Percorrendo o vetor de dados para contar os dias acima da média
foreach ($dados as $dia) {
    if ($dia['valor'] > $media) {
        $diasAcimaDaMedia++;
    }
}

// Resultados
echo "Menor valor de faturamento: " . $menorValor .  PHP_EOL;
echo "Maior valor de faturamento: " . $maiorValor .  PHP_EOL;
echo "Número de dias acima da média: " . $diasAcimaDaMedia . PHP_EOL;

?>
