<?php

//Criado por José Augusto Chaves Izabel

//12/02/2020

//Código criado com a intenção de testar de o "var_dump" conseguiria diferenciar um "Int" e um "Float" na comparação.

$Valor1 = 23.23;
$Valor2 = 23;

echo '<strong>Valor e tipo da variável $Valor1 :</strong>'."<br>\n";

var_dump($Valor1);

echo "<br>\n";
echo '<strong>Valor e tipo da variável $Valor2 :</strong>'."<br>\n";

var_dump($Valor2);

echo "<br>\n";
echo "<strong>Valor 1 é igual á $Valor1.</strong><br>\n";
echo "<strong>Valor 2 é igual á $Valor2.</strong><br>\n";
echo "<strong>$Valor1 e $Valor2 tem o mesmo valor?</strong><br>\n";

var_dump($Valor1==$Valor2);

echo "<br>\n";
echo "<strong>$Valor1 e $Valor2 tem o mesmo valor e tipo?</strong><br>\n";

var_dump($Valor1===$Valor2);
?>