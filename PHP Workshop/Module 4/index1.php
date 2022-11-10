<?php
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=AUTOS', 'Vishwas', 'vp@123');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $cars_array = array();

    $stmt = $pdo->query("SELECT * FROM CARS");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        array_push($cars_array, $row);
    }

?>

<html>
    <body>
        <ol>
            <?php foreach($cars_array as $cars): ?>
                <li>
                    <a href="car_update.php?car_id=<?= $cars["car_id"] ?>"> <?= $cars["car_name"] ?></a>
                </li>
            <?php endforeach ?>
        </ol>
    </body>
</html>