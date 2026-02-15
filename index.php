<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="css/navbarstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

</head>
<body class="landingPage">
    <?php include('gu/navbar.php') ?>

    <section class="main-section jumbotron">
        <div class="leftHeroSection">
            <div class="heroHeader">
                <h1>Sylvia's</h1>
                <h1>Event Place &</h1>
                <h1>Resto Bar</h1>
                <span class="border-bottom"></span>
            </div>
            <div class="heroBottom my-4">
                <p>Offers Baptismal, Birthday, Debut, Weddings, Corporate Venue, etc.
                </p>
            </div>
            <div class="bottombtn">
                <button class="btnLogin btn">
                    <a href="login.php">Log In</a>
                </button>
            </div>
        </div>
        <div class="rightHeroSection shadow" >
            <img src="image/488649360_2168334760293743_4169895936572549667_n.jpg" class="img-fluid " alt="">
        </div>
        
    </section>
    
</body>
</html>