<?php

    //calculator.php?broj_1=333&broj_2=356
    
    
    // Global variable
    // $_SERVER, $_GET, $_POST = assoc array

    
    //["broj_1"]=> "333" ["broj_2"]=> "356" }

    $racunica = $_GET["broj_1"] + $_GET["broj_2"];
    
    echo $racunica;

