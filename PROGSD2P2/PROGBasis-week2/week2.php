<?php

/*
 * Opdracht 1:
 * Maak de $weekdagen array af zodat alle dagen van de week erin staan
 * Voor de key en value gebruik je kleine letters, geen hoofdletters
 */

$weekdagen = array(
    'ma' => 'maandag',
    'di' => 'dinsdag',
    'wo' => 'woensdag',
    'do' => 'donderdag',
    'vr' => 'vrijdag',
    'za' => 'zaterdag',
    'zo' => 'zondag'
);

/*
 * Opdracht 2:
 * Gebruik een loop om van alle elementen van je array de waarde te tonen op het scherm
 * Gebruik hiervoor een echo statement dus geen print_r of var_dump.
 */

    //  Staat samen bij "Opdracht 3".

/*
 * Opdracht 3:
 * Wijzig alle waardes in je array met behulp van een loop en een switch
 * Alle waardes moeten beginnen met een hoofdletter. Bij 'za' en 'zo' moeten de waardes
 * van de dagen geheel uit hoofdletters bestaan.
 * Gebruik hiervoor de juiste functies
 */

foreach ($weekdagen as $key => $dag) {
    switch($key){
        case 'ma';
        case 'di';
        case 'wo';
        case 'do';
        case 'vr';
        echo ucfirst (strtolower (htmlspecialchars($dag)));
        break;
        case 'za';
        case 'zo';
        echo ucfirst (strtoupper (htmlspecialchars($dag)));
        default:
        break;
    };
};

/*
 * Opdracht 4:
 * Maak een nieuwe array en noem deze $omgekeerd.
 * De inhoud van deze array bestaat uit de elementen van de weekdagen array.
 * Gebruik hiervoor een for loop en array_push() om deze elementen te kopieren naar de nieuwe array
 * HINT: de grootte van een array kun je met sizeof() en count() bepalen
 */

echo '<br>';
echo '<br>';
echo "dit is count() in een foreach loop door een key en waarde";
foreach($weekdagen as $dagen => $dag){
    echo "$dagen:  $dag";
};

echo "<br>";
echo "<br>";
echo "dit is sizeof() in een for loop";echo "<br>";

echo "<br>";
$size = sizeof($weekdagen); 
for($i = 6; $i < $size; ++$i){
    echo $size;
};

/*
 * Opdracht 5:
 * Gebruik de functie array_reverse om hetzelfde resultaat als in opdracht 4 te verkrijgen.
 */

array_reverse($weekdagen);
