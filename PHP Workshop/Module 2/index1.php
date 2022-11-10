<?php
    $pdo = new PDO(
        'mysql:host=localhost;port=3306;dbname=AUTOS',
        'Vishwas',      //UserName used in Grant Command
        'vp@123'        //Password used in Grant Command
    );

    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    echo("<pre>");
    $start = $pdo->query("select * from CARS");
    while($row = $start->fetch(PDO::FETCH_ASSOC)) {
        print_r($row);
    }
    echo("</pre>");

?>