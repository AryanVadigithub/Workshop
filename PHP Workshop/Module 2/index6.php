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

    $cars_array = array();
    $start = $pdo->query("select * from Cars");
    while($row = $start->fetch(PDO::FETCH_ASSOC)) {
        array_push($cars_array, $row);
    }
?>

<html>
    <head></head>
    <body>
        <ol>
            <?php foreach($cars_array as $car): ?>
                <li>
                    <a href= <?= "\"car_details.php?car_name=" . $car["car_name"] . "\"" ?>>
                        <?= $car["car_name"]?>
                    </a>
                </li>
            <?php endforeach ?>
        </ol>
    </body>
</html>