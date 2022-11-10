<?php
    $var1 = 25;
    $var2 = 25;

    if($var1 > $var2){
        echo($var1."is Greater");
    }
    elseif($var1 === $var2){
        echo("Both values are Equal");
    }
    else{
        echo("$var2 is Greater");
    }

    echo("<br>");

    $var1 = 25;
    $var2 = "25";

    if($var1 == $var2){
        echo("Both values are Equal");
    }
    else{
        echo("Both values are NOT Equal");
    }

    echo("<br>");

    $var1 = 25;
    $var2 = "25";

    if($var1 === $var2){
        echo("Both values are Equal");
    }
    else{
        echo("Both values are NOT Equal");
    }

    echo("<br>");
?>