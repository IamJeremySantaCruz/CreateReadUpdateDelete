<?php

include(__DIR__ . "/../database/connect_db.php");

if (isset($_GET['deleteid'])) {

    $id = $_GET['deleteid'];

    $deleteQuery = "DELETE FROM `employeeInformation` WHERE id = $id";
    $result = mysqli_query($connection, $deleteQuery);

    if ($result) {
        header("Location:/../functions/Read.php");
    } else {
        die($connection . $connection->connect_error);
    }
}
