<?php

while (true) {
    system('clear');

    echo "============ [Menu] =============\n";
    echo "Escolha uma das opções abaixo:\n";
    echo "1 - Cadastrar Aluno\n";
    echo "2 - Alterar Aluno\n";
    echo "3 - Excluir Aluno\n";
    echo "4 - Mostrar todos os alunos\n";
    echo "5 - Sair\n";

    $opcao = readline("Digite a opção desejada: ");

    system('clear');
    switch ($opcao) {
        case 1:
            echo "Você escolheu a opção 1 - Cadastrar Aluno. Este é para cadastrar o aluno.\n";
            break;
        case 2:
            echo "Você escolheu a opção 2 - Alterar Aluno.\n";
            break;
        case 3:
            echo "Você escolheu a opção 3 - Excluir Aluno.\n";
            break;
        case 4:
            echo "Você escolheu a opção 4 - Mostrar todos os alunos.\n";
            break;
        case 5:
            echo "Você escolheu a opção 5 - Sair. O programa será encerrado.\n";
            exit();
        default:
            echo "Opção inválida. Por favor, escolha uma opção válida.\n";
    }

    sleep(5);
}
?>