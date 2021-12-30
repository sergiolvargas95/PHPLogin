<?php include("./database.php")?>
<?php
    session_start();
    $objConnetion = new connection();
    $users = $objConnetion -> consultar("SELECT * FROM `users`");
    foreach($users as $user) {
        if($_POST) {
            if(($_POST['username'] == $user['username']) && ($_POST['password'] == $user['password'])) {
                $_SESSION['id'] = session_id();
                print_r($user['username']);
                header("location:index.php");
            } else {
                echo "<script>alert('usuario o contraseña incorrecto');</script>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <div class="container">
        <br/>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="./login.php" method="post">
                    <div class="card text-center">
                        <div class="card-header">
                            <a href="./register.php" class="btn btn-success btn-lg ">Sign Up</a>
                            <a href="./login.php" class="btn btn-secondary btn-lg ">Log In</a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Log In</h5>
                            <input class="form-control" type="text" name="username" id=""  placeholder="username">
                            <input class="form-control" type="password" name="password" id=""  placeholder="password">
                            <div class="d-grid gap-2">
                                <input class="btn btn-success" type="submit" value="LOGIN">
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                            <a class="link-success" href="./register.php">No account? Create one now!</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>
