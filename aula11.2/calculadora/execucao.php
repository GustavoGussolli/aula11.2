<?php

require_once("modelo/Soma.php");
require_once("modelo/Subtracao.php");
require_once("modelo/Divisao.php");
require_once("modelo/Multiplicacao.php");
require_once("modelo/Resto.php");

do {

    echo "-------------------- \n";
    echo "| 1-    Soma       | \n";
    echo "-------------------- \n";
    echo "| 2-  Subtração    | \n";
    echo "-------------------- \n";
    echo "| 3-  Divisão      | \n";
    echo "-------------------- \n";
    echo "| 4- Multiplicação | \n";
    echo "-------------------- \n";
    echo "| 5-   Resto       | \n";
    echo "-------------------- \n";
    echo "| 0-    Sair       | \n";
    echo "-------------------- \n";

    $tipo = readline("Informe o tipo de Calculo: ");

    switch ($tipo) {

        case '0':
            echo "Programa Encerrado \n";
            break;

        case '1':
            system('clear');
            $soma = new Soma();
            $soma->setNumA(readline("Informe o numA: "));
            $soma->setNumB(readline("Informe o numB: "));
            echo "Resultado: " . $soma->calcular() . "\n";
            break;

        case '2':
            system('clear');
            $subtracao = new Subtracao();
            $subtracao->setNumA(readline("Informe o numA: "));
            $subtracao->setNumB(readline("Informe o numB: "));
            echo "Resultado: " . $subtracao->calcular() . "\n";
            break;

        case '3':
            system('clear');
            $divisao = new Divisao();
            $divisao->setNumA(readline("Informe o numA: "));
            $divisao->setNumB(readline("Informe o numB:"));
            echo "Resultado: " . $divisao->calcular() . "\n";
            break;

        case '4':
            system('clear');
            $multiplicacao = new Multiplicacao();
            $multiplicacao->setNumA(readline("Informe o numA: "));
            $multiplicacao->setNumB(readline("Informe o numB: "));
            echo "Resultado: " . $multiplicacao->calcular() . "\n";
            break;

        case '5':
            system('clear');
            $resto = new Resto();
            $resto->setNumA(readline("Informe o numA: "));
            $resto->setNumB(readline("Informe o numB: "));
            echo "Resultado: " . $resto->calcular() . "\n";
            break;

        default:
            system('clear');
            echo "Tipo não encontrado \n";
            break;
    }
} while ($tipo != 0);
