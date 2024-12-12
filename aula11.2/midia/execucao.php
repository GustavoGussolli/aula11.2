<?php 

    require_once("modelo/CD.php");
    require_once("modelo/DVD.php");

    $cd = new CD();
    $cd->setNome("RHCP");
    $cd->setPreco(5.50);
    echo $cd->getTipo() . " - " . $cd . "\n";

    $dvd = new DVD();
    $dvd->setNome("Poderoso Chefão");
    $dvd->setPreco(55);
    echo $dvd->getTipo() . " - " . $dvd . "\n";

    