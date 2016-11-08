<?php
// Принято: 1, 2, 3, 4, 6
// Не принято: 5, 7, 8

//задание 1
// Принято
echo 'задание 1' . "<br>";

$name = "Юля";
$age = 33;
echo 'Меня зовут ' . $name . '</br>';
echo 'Мне ' . $age . ' года <br>';
echo ' “!|\/’”\<br> ';

//задание 2
// Принято
echo 'задание 2' . "<br>";

$pics = 80;
$flomaster = 23;
$karandash = 40;
$kraski = $pics - ($flomaster + $karandash);
echo $kraski . '<br>';

//задание 3
// Принято
echo "<br>" . 'задание 3' . "<br>";

define("CONST1", 'константа', true);
echo gettype(CONST1) . "<br>";
echo CONST1 . '<br>';
define("CONST1", 'константа new');
echo CONST1 . '<br>';

//задание 4
// Принято
echo "<br>" . 'задание 4' . "<br>";

$age = 6;
if ($age >= 18 & $age <= 65) {
    echo 'Вам еще работать и работать';
} elseif ($age > 65) {
    echo 'Вам   пора   на   пенсию';
} elseif ($age >= 1 & $age < 18) {
    echo 'Вам   ещё   рано   работать';
} else {
    echo 'Неизвестный   возраст';
}

//задание 5
// Не принято
// Оптимизировать.
echo "<br>" . 'задание 5' . "<br>";

$day = 7;
switch ($day) {
    case '1':
        echo 'Это рабочий   день';
        break;
    case '2':
        echo 'Это рабочий день';
        break;
    case '3':
        echo 'Это   рабочий   день';
        break;
    case '4':
        echo 'Это   рабочий   день';
        break;
    case '5':
        echo 'Это  рабочий  день';
        break;
    case '6':
        echo 'Это   выходной   день';
        break;
    case '7':
        echo 'Это   выходной   день';
        break;
    default:
        echo 'Неизвестный   день';
        break;
}

//задание 6
// Принято
echo "<br>" . 'задание 6' . "<br>";

$bmw = array(
    "model" => "X5",
    "speed" => "120",
    "doors" => "5",
    "year" => "2015"
);
$toyota = array(
    "model" => "RAV4",
    "speed" => "130",
    "doors" => "5",
    "year" => "2014"
);
$opel = array(
    "model" => "INSIGNIA",
    "speed" => "140",
    "doors" => "5",
    "year" => "2015"
);
$cars = [
    "bmw" => $bmw,
    "toyota" => $toyota,
    "opel" => $opel,
];
foreach ($cars as $key => $value) {
    echo "CAR $key<br>";
    echo "{$value['model']} {$value['speed']} {$value['doors']} {$value['year']}<br>";
}


//задание 7
// Не принято
echo "<br>" . 'задание 7' . "<br>";

for ($i = 1; $i <= 10; $i++) {
    echo'<table width="100%"><tr>';
    
    for ($a = 1; $a <= 10; $a++) {
         if (($i % 2 == 0)&&($a % 2 == 0)) {
             echo '<td>' . '(' . $i * $a . ')' . '</td>';
         } elseif (($i % 2 != 0)&&($a % 2 != 0)){
             echo '<td>' . '[' . $i * $a . ']' . '</td>';
         } else {
             echo '<td>' . $i * $a . '</td>';
         }
    }
    echo "</tr></table>";
}

//задание 8
// Не принято
$str = "dkfg erbge;ak erjbvfgerjl";
echo "$str";
$array = explode(" ", $str);
$i=0;
while ($i < count($array)) {
    $str_new .= $array[$i] . "+";
    $i++;
}
echo "$str_new";