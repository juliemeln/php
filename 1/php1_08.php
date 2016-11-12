<?php

//задание 8
$str="dkfg erbge;ak erjbvfgerjl";
$z=strlen($str);
$x = 0;
while ($x++ < ($z-1)) {
    echo $str[$x]."+";
}