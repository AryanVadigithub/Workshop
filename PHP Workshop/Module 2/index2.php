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

    echo("<table border=\"1\">");
    echo("<thead>");
    echo("<tr>");
    echo("<th>ID</th>");
    echo("<th>Name</th>");
    echo("<th>Company</th>");
    echo("<th>Year</th>");
    echo("<th>Price</th>");
    echo("</tr>");
    echo("</thead>");
    echo("<tbody>");

    $start = $pdo->query("select * from Cars");
    while($row = $start->fetch(PDO::FETCH_ASSOC)) {
        echo("<tr><td>");
        echo($row["car_id"]);
        echo("</td><td>");
        echo($row["car_name"]);
        echo("</td><td>");
        echo($row["car_company"]);
        echo("</td><td>");
        echo($row["car_year"]);
        echo("</td><td>");
        echo($row["car_price"]);
        echo("</td></tr>");
    }
?>