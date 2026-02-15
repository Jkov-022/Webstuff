<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/loginstyle.css">

    <link rel="stylesheet" href="css/navbarstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

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
</head>
<body class="loginPage">
    <?php include('gu/navbar.php') ?>
    <section class="loginSection">
        <form class="border shadow">
            <div class="mb-3 loginHeader">
                <h2>Login</h2>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" onclick="myFunction()" class="form-check-input" id="exampleCheck1 togglePassword">
                <label class="form-check-label" for="exampleCheck1">Show Password</label>
            </div>
            <a type="submit" class="btn btn-primary" href="about.php">Submit</a>
            <div class="">
                <p>Don't have an account? <a href="regis.php">Sign Up!</a></p>
            </div>
        </form>
    </section>
</body>
</html>