<?php

//задание 7
for($i = 1; $i < 10; $i++){
    for($a = 1; $a < 10; $a++){
        if ($i%$a==0){
            echo '('.$i*$a.'  )';
        }
        else
            echo '['.$i*$a.'  ]';
    }
    if ($a=9){
        echo '<br>';
    }
}