<?php include(__DIR__ . "/../database/connect_db.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>

    <div class=" container table-responsive">
        <button class="btn btn-secondary text-light bg-dark fw-semibold font-monospace my-3">
            <a href="/index.php" class="link-offset-2 link-underline link-underline-opacity-0 text-light"> Add Employee </a> </button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Email</th>
                    <th scope="col">Position</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Time Created</th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sqlReadQuery = "SELECT * FROM employeeInformation";
                $result = mysqli_query($connection, $sqlReadQuery);
                while ($row = mysqli_fetch_assoc($result)) {

                    $id = $row['id'];
                    $name = $row['name'];
                    $contact = $row['contact'];
                    $email = $row['email'];
                    $position = $row['position'];
                    $designation = $row['designation'];
                    $created_at = $row['created_at'];

                    echo
                    '
                <tr>
                    <td> ' . $id . '</td>
                    <td> ' . $name . '</td>
                    <td> ' . $contact . '</td>
                    <td> ' . $email . '</td>
                    <td> ' . $position . '</td>
                    <td> ' . $designation . '</td>
                    <td> ' . $created_at . '</td>
                    <td> 
                    <button class = "btn btn-success text-light"> 
                    <a href = "update.php?updateid=' . $id . '" class = "text-light"> Update </a> </button>
                    <button class = "btn btn-danger text-light"> 
                    <a href = "delete.php?deleteid=' . $id . ' " class = "text-light"> Delete </a> </button>
                    </td>
                </tr>
                ';
                }
                ?>

            </tbody>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>

</html>