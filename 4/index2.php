<?php


$movies = [
    "movie" => [
        "01" =>[
        "title" => "Titanic",
        "year" => "1997",
        "country" => "USA"
        ],
        "02" => [
        "title" => "1+1",
        "year" => "2012",
        "country" => "France"
        ]
        ],
    "series" => [
        "title" => "Walking dead",
        "year" => "2015",
        "country" => "USA"
    ]
];
print_r($movies);
echo "<br>";

$movies = json_encode($movies);
file_put_contents("output.json", $movies);
$movies2 = json_decode(file_get_contents("output.json"), true);

echo "<br>";
$random = rand(0,1);

if($random == 0) {
    echo 'No changes';

} else {
    echo 'changes';
    $movies2["movie"]["02"]["year"]="2011";
}
print_r($movies2);
$movies2 = json_encode($movies2);
file_put_contents("output2.json", $movies2);




//
//$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
//$array2 = array("a" => "green", "yellow", "red");
//$result = array_diff_assoc($movies, $movies2);
//print_r($result);

