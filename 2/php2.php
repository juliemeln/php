<?php
// Не принято: 1, 2, 4, 5, 8

//задание 1
// Не принято
// Не соответствует заданию
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
echo string($strings,false);

//задание 2
// Не принято
// Для - неправильный результат
// Для * и / всегда 0

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
// Принято
// Здесь нет ошибки, допущенной во 2 задании
function sum()
{
    echo gettype(func_get_arg(0));
    if (is_string(gettype(func_get_arg(0)))){
        $numbers = func_get_args();
        $action = array_shift($numbers);
        $a = $numbers[0];
        $count = count($numbers);
        echo $action;
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
// Не принято
// Нет вывода ошибки
function func($x,$y){
    
    if($x%2==0 & $y%2==0){
        for ($i = 1; $i <= $x; $i++) {
            echo'<table width="50%"><tr>';
            for ($a = 1; $a <= $y; $a++) {
                echo '<td>' . $i * $a . '</td>';
            }
        }
        echo "</tr></table>";
    }
    else
        return false;
    }
    
echo func(2,2);

//задание 5
// Не принято
// Не вырезаются пробелы
// Не убирается значимость регистра
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
// Принято
echo date('d-m-Y H:i') .'<br>';
echo  date('d.m.Y H:i:s', mktime(0, 0, 0, 2, 24, 2016));

//задание 7
// Принято
// Обязательно: переделать на использование функции замены подстроки
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
// ????


//задание 9
// Принято
function openFile() {
    $handler = fopen("test.txt", "r");
    $contents = fread($handler, filesize("test.txt"));
    echo $contents;
}

//задание 10
// Принято
$text = "Hello again!";
$fp = fopen("anothertest.txt", "w");
fwrite($fp, $text);
fclose($fp);