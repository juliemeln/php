<?php
$array=[];

for ($i = 0; $i <= 50; $i++) {
    $array[] = rand(0, 100);
}
//print_r($array);
$fp = fopen("output.csv", 'w');    //открываем файл
fputcsv($fp, $array);
fclose($fp);

$cvs = file_get_contents("output.csv");

$newArray  = explode(",", $cvs);
$sum = 0;
foreach ($newArray as $item) {
    if ($item % 2 == 0){
        $sum = $sum + $item;
    }
}
print $sum;
