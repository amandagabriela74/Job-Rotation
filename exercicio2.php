<?php
// variavel do número a ser verificado
$num = 13;

// variáveis que armazenam os dois primeiros números da sequência
$fib1 = 0;
$fib2 = 1;

// Varivel que indica se o número foi encontrado na sequência
$encontrado = false;

//Se o número atual é igual ao número informado, marca como encontrado e sai do loop
while ($fib2 <= $num) {
    if ($fib2 == $num) {
        $encontrado = true;
        break;
    }

    // Atualiza os valores da sequência para os próximos dois números
    $fib2 = $fib1 + $fib2;
    $fib1 = $fib2 - $fib1;
}

// Verifica e retorna uma mensagem avisando se o número informado pertence ou não a sequência.
if ($encontrado) {
    echo "O número $num pertence à sequência de Fibonacci.";
} else {
    echo "O número $num não pertence à sequência de Fibonacci.";
}
?>