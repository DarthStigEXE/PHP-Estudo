<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Created and updated by José Augusto Chaves Izabel
// Criado e atualizado por José Augusto Chaves Izabel

// 17/02/2020

// Print a "Hello World !!!", using variables;
// Impressão de um "Hello World !!!" com uso das variáveis;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$Hello = "Hello";

echo '<strong>Impressão da variável "Hello" :</strong>'."<br>\n";
echo $Hello."<br>\n";
echo "<br>\n";

$World = "World";

echo '<strong>Impressão da variável "World" :</strong>'."<br>\n";
echo $World."<br>\n";
echo "<br>\n";
echo '<strong>Impressão da variável "Point" :</strong>'."<br>\n";

$Point = "!!!";

echo $Point."<br>\n";
echo "<br>\n";
echo '<strong>Impressão da junção das variáveis "Hello","World","Point" :</strong>'."<br>\n";
echo $Hello." ".$World." ".$Point;

exit;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// COMMAND SUBTITLE :
// LEGENDA DE COMANDOS :

// echo = Print message;
// echo = Imprimir mensagem;

// <br> = Line break, in final exibition, must be used into quotation marks, single or double;
// <br> = Quebra de linha na exibição final, deve ser usado dentro de aspas, simples ou duplas;

// \n = Line break, in the HTML code generated after, must be used into quotation marks, double;
// \n = Quebra de linha no código HTML que será gerado, deve ser usado dentro de aspas, duplas;

// exit = Serve the code to stop being interpreted;
// exit = Serve para que o código pare de ser interpretado;

// <strong> </strong> = Leave the text written in bold, must be closed at the end of the text, must be used within quotation marks, single or double;
// <strong> = Deixa o texto escrito em negrito, deve ser fechado ao final do texto, deve ser utilizado dentro de aspas, simples ou duplas;

// . = It is used to concatenate two variables, or one variable and one text, or two texts for example;
// . = É utilizado para fazer a concatenação de duas variáveis, ou um variável e um texto, ou dois textos por exemplo;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// VARIABLE SUBTITLE :
// LEGENDA DE VARIÁVEIS :

// $Hello = Receive a strign, "Hello";
// $Hello = Recebe uma string, "Hello";

// $World = Receive a string, "World";
// $World = Recebe uma string, "World";

// $Point = Receive a string, "!!!";
// $Point = Recebe uma string, "!!!";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
