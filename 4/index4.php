<?php

$c = curl_init("https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json");
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($c, CURLOPT_URL,"https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json");
$data = curl_exec($c);
curl_close($c);

gettype($data);

//$arr = explode(",", $data);

$arr = json_decode($data,true);
//print_r($arr);


function test_print($item, $key)
{

    if(($key == "title") or ($key == "pageid")) {
        echo "$key"." is ". "$item".'</br>';
    }


}

array_walk_recursive($arr, 'test_print');