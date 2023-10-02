<?php

include(__DIR__ . "/../database/connect_db.php");

$id = $_GET['updateid'];

$sqlRetrieveQuery = "SELECT * FROM `employeeinformation` WHERE id = $id";
$resultOfRetrieveQuery = mysqli_query($connection, $sqlRetrieveQuery);
$row = mysqli_fetch_assoc($resultOfRetrieveQuery);

$name = $row['name'];
$contact = $row['contact'];
$email = $row['email'];
$designation = $row['designation'];
$position = $row['position'];

if (isset($_POST['Update'])) {

    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $designation = $_POST['Designation'];
    $position = $_POST['Position'];

    $sqlUpdateQuery = "UPDATE `employeeinformation` SET id = $id, name='$name', contact='$contact', email ='$email',
    position ='$position', designation ='$designation' WHERE id = $id";
    $result = mysqli_query($connection, $sqlUpdateQuery);

    header("Location: /../functions/Read.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Basic CRUD Operations. </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="my-2"> Employee Update Form </h1>

        <form method="POST" action="">
            <div class="my-2">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name" value="<?php echo $name; ?>">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="my-2">
                <label class="form-label">Contact</label>
                <input type="text" class="form-control" name="contact" placeholder="Enter your Contact no." value="<?php echo $contact; ?>">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="my-2">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Enter valid Email address" value="<?php echo $email; ?>">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <label> Position: </label>

            <?php

            $option = array('Open this select to Position', 'Manager', 'Programmer', 'HR');
            echo '<select class="form-select form-select-lg mb-3" aria-label="Large select example" name="Position">';
            foreach ($option as $optionPosition) {
                if ($position == $optionPosition) {
                    echo '<option selected = "selected" value="' . $optionPosition . '">' . $optionPosition . '</option>';
                } else {
                    echo '<option value="' . $optionPosition . '">' . $optionPosition . '</option>';
                }
            }
            echo '</select>';

            ?>

            <label> Designation: </label>

            <?php
            $option = array('Open this select to Designation', 'Computer Engineer', 'IT', 'Finance');
            echo '<select class="form-select form-select-lg mb-3" aria-label="Large select example" name="Designation">';
            foreach ($option as $optionDesignation) {
                if ($designation == $optionDesignation) {
                    echo '<option selected = "selected" value="' . $optionDesignation . '">' . $optionDesignation . '</option>';
                } else {
                    echo '<option value="' . $optionDesignation . '">' . $optionDesignation . '</option>';
                }
            }
            echo '</select>';
            ?>

            <br>
            <input type="submit" name="Update" value="Update" class="btn btn-primary">
        </form>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>