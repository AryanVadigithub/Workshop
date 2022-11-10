<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=AUTOS', 'Vishwas', 'vp@123');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$valid_request = false;
$car_details = array();

if (isset($_GET["car_id"])) {
    $valid_request = true;

    $sql = "SELECT * FROM CARS where car_id = :car_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(":car_id" => $_GET["car_id"]));
    $car_details = $stmt->fetch(PDO::FETCH_ASSOC);
}

if($valid_request === true && count($car_details) > 0) {
    // Data Deletion
    $sql = "DELETE FROM CARS where car_id = :car_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(":car_id" => $_GET["car_id"]));
    $message = "Deleted Car " . $car_details["car_name"] . " with ID " . $car_details["car_id"];
    header("location: index1.php");
    return;
}
?>

<html>

<head></head>

<body>
    <?php if ($valid_request) : ?>
        <?php if (!$car_details) : ?>
            <h1 style="color: red;">Car details not found for <?= htmlentities($_GET["car_id"]) ?></h1>
        <?php endif ?>
    <?php else : ?>
        <h1 style="color: red;">Invalid Request URL - ID not found.</h1>
    <?php endif ?>

</body>

</html>