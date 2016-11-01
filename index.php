<?php
//задание 1
echo 'задание 1' . "<br>";

$name = "Юля";
$age = 33;
echo 'Меня зовут ' . $name . '</br>';
echo 'Мне ' . $age . ' года <br>';
echo ' “!|\/’”\<br> ';

//задание 2
echo 'задание 2' . "<br>";

$pics = 80;
$flomaster = 23;
$karandash = 40;
$kraski = $pics - ($flomaster + $karandash);
echo $kraski . '<br>';

//задание 3
echo "<br>" . 'задание 3' . "<br>";

define("CONST1", 'константа', true);
echo gettype(CONST1) . "<br>";
echo CONST1 . '<br>';
define("CONST1", 'константа new');
echo CONST1 . '<br>';

//задание 4
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
echo "<br>" . 'задание 7' . "<br>";

for ($i = 1; $i < 10; $i++) {
    for ($a = 1; $a < 10; $a++) {
        if ($i % $a == 0) {
            echo '(' . $i * $a . '  )';
        } else {
            echo '[' . $i * $a . '  ]';
        }
    }
    if ($a = 9) {
        echo '<br>';
    }
}

//задание 8
echo 'задание 8' . "<br>";

$str = "dkfg erbge;ak erjbvfgerjl";
$z = strlen($str);
$x = 0;
while ($x++ < ($z - 1)) {
    echo $str[$x] . "+";
}