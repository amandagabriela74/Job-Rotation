<?php
// string a ser invertida
$string = "Me dê uma oportunidade!";

// variável para armazenar a string invertida
$invertedString = "";

// percorre a string original de trás para frente
for ($i = strlen($string) - 1; $i >= 0; $i--) {
    // adiciona cada caractere à variável $invertedString
    $invertedString .= $string[$i];
}

// imprime a string invertida
echo $invertedString;
?>
