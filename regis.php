<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="css/loginstyle.css"> -->
    <link rel="stylesheet" href="css/regiscss.css">

    <link rel="stylesheet" href="css/navbarstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <script>
        function myFunction() {
            var x = document.getElementById("inputPassword4");
            var y = document.getElementById("inputPassword5");
            if (x.type === "password" && y.type === "password") {
                y.type = "text";
                x.type = "text";
            } else {
                y.type = "password";
                x.type = "password";
            }
        }
    </script>
</head>
<body class="regisPage">
    <?php include('gu/navbar.php') ?>
    <section class="regisSection">
        <form class="row g-3 border shadow">
            <div class="col-md-12">
                <label for="validationDefault01" class="form-label">Email</label>
                <input type="text" class="form-control" id="validationDefault01">
            </div>
            <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="inputPassword5">
            </div>
            <div class="mb-1 form-check">
                <input type="checkbox" onclick="myFunction()" class="form-check-input" id="exampleCheck1 togglePassword">
                <label class="form-check-label" for="exampleCheck1">Show Password</label>
            </div>
            <label for="">Choose your Profile</label>
            <div class="input-group mb-1 n-margin">
                
                <input type="file" class="form-control" id="inputGroupFile02">
            </div>
            <div class="col n-margin">
                <a href="login.php" class="btn btn-primary">Sign in</a>
            </div>
        </form>
    </section>
</body>
</html>