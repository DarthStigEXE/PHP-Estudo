<?php

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Criado e atualizado por José Augusto Chaves Izabel

//11/02/2020

//Código com a intenção de imprimir "Hello World!!!", e após isso, utilizando o "var_dump" mostrar seu tipo e tamanho.

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Impressão de mensagem.

echo '<strong>Impressão da variável "$Hello" :</strong>'."<br>\n";

//Criação de variável.

$Hello = "Hello World!!!";

//Impressão de variável.

echo $Hello."<br>\n";

//Impressão de mensagem.

echo "<strong>Especificação da variável 'Hello' utilizado var_dump:</strong><br>\n";

//Impressão de "var_dump".

var_dump ($Hello);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// echo = Usado para impressão de mansagens ou valores.

// <strong> = Usado para deixar o texto em negrito, ao final da frase deve ser fechado, deve ser usado dentro de aspas, simples ou duplas.

// <br> = Usado para quebrar linha na exibição final do código, usado dentro de aspas, simples ou duplas.

// \n = Usado para quebrar linha no código HTML que será gerado ao final, deve ser usado dentro de aspas, duplas.

// var_dump = Usado para exibir o tipo e valor de uma variável, após chama-lo deve ser abrir parentesis e colocar o nome da variável lá dentro.

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
