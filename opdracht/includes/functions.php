<?php

$aantalProd = null;
$productnummer = null;
$product = [
    ["appel", 1, 0.20]
    ["peer", 2, 0.25]
    ["koekjes", 3, 1.00]
    ["water", 4, 0.15]
    ["chips", 5, 1.35]
    ["melk", 6, 1.20]
    ["snoep", 7, 1.10]
    ["kaas", 8, 1.00]
    ["yoghurt", 9, 1.25]
    ["aardbei", 10, 1.00]
];



function getInput()
{
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    echo var_dump($input);
}


function getProductNr()
{
    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
    echo $productnummer;
}

function getAmount()
{
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    echo $aantalProd;
}

function getAge()
{
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    echo $leeftijd;
}

function getKorting(){
    $leeftijd= $_GET['leeftijd'];
    switch ($leeftijd) {
        case 19:
            echo "0,19";
        break;
        case 18:
            echo "0,18"
        break;
        case 17:
            echo "0,17";
        break;
        case 16:
            echo "0,16";
        break;
       case $leeftijd < 16:
        echo "1,00";
       break;
       default:
       echo "uw korting";
    }
}

function getTotal() {
    global $productnummer;
    global $product;
    global $aantalProd;
    echo $product[$productnummer-1][2] * $aantalProd;
}


?>