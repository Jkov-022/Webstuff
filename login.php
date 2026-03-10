<?php
session_start();

// connect the database
require ("db/db.php");

// code to execute the login
if(isset($_POST['login'])){

//STEP 1:
    // initializes variables from the post of the form in the html 
    $email = $_POST['email'];
    $password = $_POST['password'];

//STEP 2:
    //MYSQL / DATABASE QUERY
    $sql = "SELECT * FROM users WHERE email='$email'";

//STEP 3:
    //this runs the database query above
    $result = $conn->query($sql);

//STEP 4:
    //checks if users input have valid or have an existing email and password
    if($result->num_rows > 0) {

        // the fetch_assoc retrieves the whole record from the database
        $user = $result->fetch_assoc();

        // Verify hashed password 
        if(password_verify($password, $user['password'])) {

            $_SESSION['user'] = $user['fullname'];
            header("Location: dashboard.php");
        } else {
            echo "Invalid Password!";
        }

    } else {
        echo "User not found!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/loginstyle.css">

    <link rel="stylesheet" href="css/navbarstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

</head>
<body class="loginPage">
    <?php include('gu/navbar.php') ?>
    <section class="loginSection">
        <form class="border shadow" method="POST" action="<?php htmlspecialchars("SELF_PHP");?>">
            <div class="mb-3 loginHeader">
                <h2>Login</h2>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" onclick="myFunction()" class="form-check-input" id="exampleCheck1 togglePassword">
                <label class="form-check-label" for="exampleCheck1">Show Password</label>
            </div>
                <button type="submit" name="login" class="btn btn-primary">Login</button>
            <div class="">
                <p>Don't have an account? <a href="regis.php">Sign Up!</a></p>
            </div>
        </form>
    </section>
    <script>
        function myFunction() {
            var x = document.getElementById("exampleInputPassword1");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        
    </script>
</body>
</html>