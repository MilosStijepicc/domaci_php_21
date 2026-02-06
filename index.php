<?php

    require_once "Models/Auto.php";
    require_once "Models/Vozilo.php";
    require_once "Models/Autobus.php";
    require_once "Models/Avion.php";

    $audiA4 = new Auto();
    $audiA4->marka = "Audi";
    $audiA4->model = "A4";
    $audiA4->boja = "crvena";
    $audiA4->vrsta = "automobil";
    $audiA4->tezina = 2000;

    echo $audiA4->vrsta;
    echo $audiA4->tezina;

    $yugo55 = new Auto();
    $yugo55->marka = "Yugo";
    $yugo55->model = "55";
    $yugo55->boja = "bijela";

    $bmwX5 = new Auto();
    $bmwX5->marka = "BMW";
    $bmwX5->model = "X5";
    $bmwX5->boja = "zuta";

    $autobus = new Autobus();
    $autobus->marka = "Mercedes";
    $autobus->brojVrata = "2";
    $autobus->brojSjedista = "45";
    $autobus->spratni = false;

    echo $autobus->marka. "" . $autobus->brojVrata;

    $boeing747 = new Avion();
    $boeing747->marka = "Boeing";
    $boeing747->model = "747";
    $boeing747->padobran = false;
    $boeing747->pogon = "mlaznjak";

    echo $boeing747->marka. "" . $boeing747->pogon;
    

?>