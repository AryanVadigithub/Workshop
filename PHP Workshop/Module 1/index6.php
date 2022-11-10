<?php
    //while loop
    $i = 0;
    while($i != 5){
        echo("Tne Number is : $i <br>");
        $i++;
    }

    echo("<br>");

    //for loop
    $arr = ["A", "B", "C", "D", "E"];
    for($i=0; $i<count($arr); $i++){
        echo($arr[$i] . "<br>");
    }

    echo("<br>");

    //foreach loop
    $arr1 = [1,2,3,4,5,6];
    foreach($arr1 as $i){
        echo("$i<br>");
    }

    echo("<br>");

?>