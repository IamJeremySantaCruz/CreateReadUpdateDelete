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
        <h1 class="my-2"> Employee Form </h1>

        <form method="POST" action="functions/Create.php">
            <div class="my-2">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="my-2">
                <label class="form-label">Contact</label>
                <input type="text" class="form-control" name="contact" placeholder="Enter your Contact no.">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="my-2">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Enter valid Email address">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <label> Position: </label>
            <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="Position">
                <option selected value="">Open this select to Position</option>
                <option value="Manager">Manager</option>
                <option value="Programmer">Programmer</option>
                <option value="HR">HR</option>
            </select>

            <label> Designation: </label>

            <select class="form-select form-select-lg mb-3" aria-label="Large select example" name="Designation">
                <option selected value="">Open this select to Designation</option>
                <option value="Computer Engineer">Computer Engineer</option>
                <option value="Information Technology">IT</option>
                <option value="Finance">Finance</option>
            </select>

            <br>
            <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
        </form>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>