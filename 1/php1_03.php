<?php

//задание 3
    define("CONST1", 'константа',true);
    echo gettype(CONST1). "<br>";
    echo CONST1.'<br>';
    define("CONST1", 'константа new');
    echo CONST1.'<br>';