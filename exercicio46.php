<?php

/******************************************************************************
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ADS2A

Componentes:
RA-26013158-2-Jackson Rodrigues
RA-26013927-2-Natan da Silva
RA-26014123-2-Gustavo Tristão
RA-26014469-2-Rafael Baliski

Data: 17 de Setembro de 2026

Descritivo:
Escreva um programa que leia a sigla do estado onde uma pessoa nasceu
e informe se ela é carioca, paulista, mineira ou de outro estado.

Explicação:
O programa solicita ao usuário a sigla do estado onde ele nasceu.
Depois, utiliza estruturas condicionais para comparar a sigla digitada
com RJ, SP e MG. De acordo com o estado informado, o programa exibe
a origem correspondente.
******************************************************************************/

$estado = readline("Digite a sigla do estado onde você nasceu: ");

// Converte o que foi digitado para letras maiúsculas
$estado = strtoupper($estado);

if ($estado == "RJ") {
    echo "Você é carioca!\n";

} elseif ($estado == "SP") {
    echo "Você é paulista!\n";

} elseif ($estado == "MG") {
    echo "Você é mineiro(a)!\n";

} else {
    echo "Você nasceu em outro estado.\n";
}

?>