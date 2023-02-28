<?php

// Armazenando em uma variável o faturamento mensal de cada estado
$faturamentoSP = 67836.43;
$faturamentoRJ = 36678.66;
$faturamentoMG = 29229.88;
$faturamentoES = 27165.48;
$faturamentoOutros = 19849.53;

// Calculando o valor total do faturamento mensal
$totalFaturamento = $faturamentoSP + $faturamentoRJ + $faturamentoMG + $faturamentoES + $faturamentoOutros;

// Calculando o percentual de cada estado
$percentualSP = ($faturamentoSP / $totalFaturamento) * 100;
$percentualRJ = ($faturamentoRJ / $totalFaturamento) * 100;
$percentualMG = ($faturamentoMG / $totalFaturamento) * 100;
$percentualES = ($faturamentoES / $totalFaturamento) * 100;
$percentualOutros = ($faturamentoOutros / $totalFaturamento) * 100;

// Imprimindo os resultados
echo "percentual de representação que cada estado teve dentro do valor total mensal da distribuidora:" .  PHP_EOL;
echo "SP: " . number_format($percentualSP, 2) .  PHP_EOL;
echo "RJ: " . number_format($percentualRJ, 2) .  PHP_EOL;
echo "MG: " . number_format($percentualMG, 2) .  PHP_EOL;
echo "ES: " . number_format($percentualES, 2) .  PHP_EOL;
echo "Outros: " . number_format($percentualOutros, 2) .  PHP_EOL;

?>
