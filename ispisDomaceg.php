<?php

    require_once "Models/Pas.php";
    require_once "Models/Kokoska.php";
    require_once "Models/Riba.php";
    require_once "Models/Meduza.php";

    $pudlica = new Pas();
    $pudlica->tezina = 5;
    $pudlica->brojNogu = 4;
    $pudlica->duzinaRepa = 7;

    echo "Pudlica je teška: ". $pudlica->tezina ."kg, ima ". $pudlica->brojNogu. " noge i njen rep je dug ". $pudlica->duzinaRepa. "cm. ";

    $pile = new Kokoska();
    $pile->tezina = 3.5;
    $pile->brojNogu = 2;
    $pile->bojaPerja = "bijela";

    echo "Pile je teško: ". $pile->tezina ."kg, ima ". $pile->brojNogu. " noge i boja perja je: ". $pile->bojaPerja. ". ";

    $som = new Riba();
    $som->tezina = 20;
    $som->vrstaVode = "slatka";
    $som->krljust = "ljuske";

    echo "Som je težak: ". $som->tezina ."kg, vrsta vode: ". $som->vrstaVode. " i krljust: ". $som->krljust. ". ";

    $pelagia = new Meduza();
    $pelagia->tezina = 20;
    $pelagia->vrstaVode = "slana";
    $pelagia->duzinaPapka = 16;

    echo "Pelagia je teška: ". $pelagia->tezina ."kg, vrsta vode: ". $pelagia->vrstaVode. " i papci su joj dugi: ". $pelagia->duzinaPapka. "cm. ";

?>