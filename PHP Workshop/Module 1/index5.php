<?php
    echo("<pre>");

    //Initialising Array in 2 ways
    $a1 = array(1,2,3);
    $a2 = [4,5,6];

    //displaying Array elements
    var_dump($a1);
    var_dump($a2);

    print_r($a1);
    print_r($a2);

    $a3 = array("Vishwas", "Prabhu", "Great", 1,2,3);
    var_dump($a3);
    print_r($a3);

    $a4 = array($a2, $a3);      //Nested Array
    print_r($a4);
    print_r($a4[0]);

    $a5 = array(
        "name" => "Vishwas",
        "age" => 21,
    );

    print_r($a5);

    echo("a1 : ".count($a1)."\n");
    echo("a2 : ".count($a2)."\n");
    echo("a3 : ".count($a3)."\n");
    echo("a4 : ".count($a4)."\n");
?>