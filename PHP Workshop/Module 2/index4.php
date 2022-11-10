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
    $sql = "SELECT * FROM CARS WHERE car_name = :carName";
    $start = $pdo->prepare($sql);
    $start->execute(array("carName" => "Innova"));
    while($row = $start->fetch(PDO::FETCH_ASSOC)) {
        array_push($cars_array, $row);
    }
?>

<html>
    <body>
        <?php if(count($cars_array) > 0) :?>
            <table border="1">
                <thead>
                    <th>Car ID</th>
                    <th>Car Name</th>
                    <th>Car Company</th>
                    <th>Car Year</th>
                    <th>Car Price</th>
                </thead>
                
                <tbody>
                    <?php foreach($cars_array as $car) : ?>
                        <tr>
                            <td> <?php echo($car["car_id"]); ?> </td>
                            <td> <?php echo($car["car_name"]); ?> </td>
                            <td> <?= $car["car_company"] ?> </td>
                            <td> <?= $car["car_year"] ?> </td>
                            <td> <?= $car["car_price"] ?> </td>
                        </tr>
                        <?php endforeach ?>
                </tbody>
            </table>
        <?php else: ?>
            <h1>NO Car Records</h1>
        <?php endif ?>
    </body>
</html>