<?php
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=AUTOS','Vishwas','vp@123');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $flag = false;
    $message = "";
    if (isset($_POST["insert"])) {
        if (isset($_POST["car_name"]) && 
            isset($_POST["car_company"]) &&
            isset($_POST["car_year"]) && 
            isset($_POST["car_price"])) {
 
            if (strlen($_POST["car_name"]) == 0) {
                $message = "Enter car name";
            } elseif (strlen($_POST["car_company"]) == 0) {
                $message = "Enter car company name";
            } elseif (strlen($_POST["car_year"]) == 0) {
                $message = "Enter car make year";
            } elseif (!is_numeric($_POST["car_year"])) {
                $message = "Enter valid car make year";
            } elseif (strlen($_POST["car_price"]) == 0) {
                $message = "Enter car price";
            } elseif (!is_numeric($_POST["car_price"])) {
                $message = "Enter valid car price";
            } else {
                $message = "Valid Data";
                $flag = true;
            }
        } else {
            $flag = false;
            $message = "Data not set";
        }
    }

    if($flag === true) {
        //Data insertion into the DataBase
        $sql = "INSERT INTO CARS (car_name, car_company, car_year, car_price) VALUES (:car_name, :car_company, :car_year, :car_price)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ":car_name" => $_POST["car_name"],
            ":car_company" => $_POST["car_company"],
            ":car_year" => $_POST["car_year"],
            ":car_price" => $_POST["car_price"],
        ));
        unset($_POST["car_name"]);
        unset($_POST["car_company"]);
        unset($_POST["car_year"]);
        unset($_POST["car_price"]);
    }
    echo ("<pre>");
    print_r($_GET);
    print_r($_POST);
    echo ("</pre>");
?>

<html>
    <body>
        <form method="post">
            <label for="car_name">Car Name</label>
            <input type="text" name="car_name" id="car_name" value="<?= isset($_POST["car_name"]) ? $_POST["car_name"] : ""?>">
            <br>

            <label for="car_company">Car Company</label>
            <input type="text" name="car_company" id="car_company" value="<?= isset($_POST["car_company"]) ?  $_POST["car_company"] : "" ?>">
            <br>

            <label for="car_year">Car Year</label>
            <input type="text" name="car_year" id="car_year" value="<?= isset($_POST["car_year"]) ?  $_POST["car_year"] : "" ?>" >
            <br>

            <label for="car_price">Car Price</label>
            <input type="text" name="car_price" id="car_price" value="<?= isset($_POST["car_price"]) ?  $_POST["car_price"] : "" ?>" >
            <br>

            <input type="submit" name="insert" value="Insert">
        </form>
        
        <?php if($flag === true): ?>
            <h5 style="color: green;"><?= $message ?></h5>
        <?php else : ?>
            <h5 style="color: red;"><?= $message ?></h5>
        <?php endif ?>
    </body>
</html>