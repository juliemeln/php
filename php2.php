<?php
//задание 1

$strings = array("apple", "flower", "hello", "world");

function string($strings,$second)
{
    foreach ($strings as $string) {
        if ($second==true){
            echo "{$string} ";
        }
        else
            echo "<p>{$string}</p>";
    };
    return;
};

//задание 2

$numbers=array(2,5,5,5);
$action='+';
function action($numbers,$action)
{
    $a=0;
    $count = count($numbers);
    for ($i = 0; $i < $count; $i++) {
        switch ($action) {
            case '+':
                $a=$a+$numbers[$i];
                break;
            case '-':
                $a=-$numbers[$i];
                break;
            case '/':
                $a=$a*$numbers[$i];
                break;
            case '*':
                $a=$a*$numbers[$i];
                break;
            default:
                echo 'Неизвестная  операция';
                break;
            };
            };
    echo $a;
    return;

};
echo action($numbers,$action);