<?php

include(__DIR__ . "/../database/connect_db.php");

if (isset($_POST['Submit'])) {

    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $designation = $_POST['Designation'];
    $position = $_POST['Position'];

    $sqlAddEmployeeQuery = "INSERT INTO `employeeinformation`(name,contact,email,position,designation) 
    VALUES ('$name','$contact','$email','$position','$designation')";
    $result = mysqli_query($connection, $sqlAddEmployeeQuery);

    header("Location: /../functions/Read.php");
}
