<?php
//задание 1

$strings = array("apple", "flower", "hello", "world");

function string($strings,$second)
{
    foreach ($strings as $string) {
        if ($second == true){
            echo "{$string} ";
        }
        else
            echo "<p>{$string}</p>";
    };
    return;
};
echo string($strings);
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

//задание 3
function sum()
{
    if (gettype(func_get_arg(0))==string) {
        $numbers = func_get_args();
        $action=func_get_arg(0);
        print_r($numbers);
        $a=0;
        $count = count($numbers);
        echo $action;
        echo $count;
        for ($i = 1; $i < $count; $i++) {
            switch ($action) {
                case '+':
                    $a=$a+$numbers[$i];
                    break;
                case '-':
                    $a=$a-$numbers[$i];
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
    }
    return;

};
echo sum("*",2,5,5,5);

//задание 4
function func($x,$y){

    if($x%2==0 & $y%2==0){

    }
}


//задание 5
echo '<br>';
function palindrom($str){
    $c=strlen($str)-1;
    for ($i = 0; $i < $c/2; $i++){
        if($str[$i] != $str[$c-$i]){
            echo "нет<br>";
        return false;}
        echo "да<br>";
        return true;
    }
}
palindrom("uiiiooo oooiiiu");
palindrom("ilglugv,jbhkyufljv");

//задание 6
ini_set('date.timezone', 'Russia/Moscow');
$time1 = date('H:i:s',time());
echo 'Сейчас:'. date('d-m-Y') ."\n";
echo  $time1."<br>";


//задание 7

$str="Карл у Клары украл Кораллы";
$array = explode("К", $str);
$i=0;
while ($i < count($array)) {
    $str_new .= $array[$i] . "";
    $i++;
}
echo "$str_new<br>";

$str2="Две бутылки лимонада";
$array2= explode(' ',$str2);

$str_new2 .= "Три " . $array2[1]." ". $array2[2];

echo $str_new2."<br>";

//задание 8

$val = include "test.txt";
echo $val;

//задание 9


