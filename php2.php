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
echo string($strings,false);

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
        echo gettype(func_get_arg(0));
        if (is_string(gettype(func_get_arg(0))){
        $numbers = func_get_args();
        $action=array_shift($numbers);
        $a = 0;
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
echo date('d-m-Y H:i') .'<br>';
echo  date('d.m.Y H:i:s', mktime(0, 0, 0, 2, 24, 2016));

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



//задание 9
function openFile() {
    $handler = fopen("test.txt", "r");
    $contents = fread($handler, filesize("test.txt"));
    echo $contents;
}

//задание 10

$text = "Hello again!";
$fp = fopen("anothertest.txt", "w");
fwrite($fp, $text);
fclose($fp);