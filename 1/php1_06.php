<?php
//задание 6

$bmw = array(
    "model" => "X5",
    "speed" => "120",
    "doors" => "5",
    "year" => "2015");
$toyota = array(
    "model" => "RAV4",
    "speed" => "130",
    "doors" => "5",
    "year" => "2014");
$opel = array(
    "model" => "INSIGNIA",
    "speed" => "140",
    "doors" => "5",
    "year" => "2015");
$cars = [
    "bmw" => $bmw,
    "toyota" => $toyota,
    "opel" => $opel,
];
foreach ($cars as $key => $value) {
    echo "CAR $key<br>";
    echo "{$value['model']} {$value['speed']} {$value['doors']} {$value['year']}<br>";
}
