<?php

echo "============ [Menu] ==============\n\n";

echo "Escolha uma das opções abaixo:\n";
echo "1 - Cadastrar Aluno\n";
echo "2 - Alterar Aluno\n";
echo "3 - Excluir Aluno\n";
echo "4 - Mostrar todos os alunos\n";
echo "5 Sair \n";

$opcao = intval(trim(fgets(STDIN)));

switch ($opcao) {
    case 1:
        echo  "Você digitou a opção 1";
        break;
    case 2:
        echo  "Você digitou a opção 2";
        break;
    case 3:
        echo  "Você digitou a opção 3";
        break;
    case 4:
        echo  "Você digitou a opção 4";
        break;
    default:
        echo  "Sair do programa";
}

