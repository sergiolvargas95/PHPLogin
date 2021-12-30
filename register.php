<?php include("./database.php"); ?>
<?php
    $firstName = "";
    $lastName = "";
    $username = "";
    $email = "";
    $password = "";
    if($_POST) {
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        //Insert data into the DB
        $objConnection = new connection();
        $sql = "INSERT INTO `users` (`id`, `first name`, `last name`, `username`, `email`, `password`) VALUES (NULL, '$firstName', '$lastName', '$username', '$email', '$password');";
        $objConnection -> ejecutar($sql);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <div class="container">
        <br/>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="./register.php" method="post">
                    <div class="card text-center">
                        <div class="card-header">
                            <a href="./register.php" class="btn btn-success btn-lg ">Sign Up</a>
                            <a href="./login.php" class="btn btn-secondary btn-lg ">Log In</a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Sign Up for Free</h5>
                            <div class="input-container">
                                <input type="text" name="firstName" id="" class="form-control input-name" placeholder="First Name*">
                                <input type="text" name="lastName" id="" class="form-control input-name" placeholder="Last Name*">
                            </div>
                            <input class="form-control" type="text" name="username" id=""  placeholder="username*">
                            <input class="form-control" type="email" name="email" id=""  placeholder="name@example.com*">
                            <input class="form-control" type="password" name="password" id=""  placeholder="password*">
                            <div class="d-grid gap-2">
                                <input class="btn btn-success" type="submit" value="GET STARTED">
                            </div>
                        </div>
                        <div class="card-footer text-muted"></div>
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>
