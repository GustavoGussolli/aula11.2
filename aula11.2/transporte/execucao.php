<?php

require_once("modelo/Carro.php");
require_once("modelo/MicroOnibus.php");
require_once("modelo/Onibus.php");
require_once("modelo/Van.php");

do {


    echo "-------------------- \n";
    echo "| 1-    Carro       | \n";
    echo "-------------------- \n";
    echo "| 2-     Van        | \n";
    echo "-------------------- \n";
    echo "| 3-  Micro onibus  | \n";
    echo "-------------------- \n";
    echo "| 4-    Onibus      | \n";
    echo "-------------------- \n";
    echo "| 0-    Sair       | \n";
    echo "-------------------- \n";


    $tipo = readline("Informe o tipo de veículo: ");

    switch ($tipo) {
        case '0':
            echo "Programa Encerrado! \n";
            break;

        case '1':
            system('clear');
            $carro = new Carro();
            $carro->setValor(readline("Informe o valor do aluguel: "));
            $carro->setKm(readline("Informe a quantidade de Km rodados: "));
            echo $carro->calcular();
            break;

        case '2':
            system('clear');
            $van = new Van();
            $van->setValor(readline("Informe o valor do aluguel: "));
            $van->setKm(readline("Informe a quantidade de Km rodados: "));
            echo $van->calcular();
            break;

        case '3':
            system('clear');
            $microOnibus = new MicroOnibus();
            $microOnibus->setValor(readline("Informe o valor do aluguel: "));
            $microOnibus->setKm(readline("Informe a quantidade de Km rodados: "));
            echo $microOnibus->calcular();
            break;

        case '4':
            system('clear');
            $onibus = new Carro();
            $onibus->setValor(readline("Informe o valor do aluguel: "));
            $onibus->setKm(readline("Informe a quantidade de Km rodados: "));
            echo $onibus->calcular() ;
            break;

        default:
            system('clear');
            echo "Tipo de veículo errado! \n";
            break;
    }
} while ($tipo != 0);
