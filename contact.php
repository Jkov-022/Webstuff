<?php

include "db/db.php";

$successmessage = "";
$failedmessage = "";

if(isset($_POST['submit'])) {

    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate empty fields
    if (empty($username) || empty($email) || empty($message)) {
        $failedmessage = "Please fill in all fields.";
    } else {

        $sql = "INSERT INTO contact (username, email, message)
                VALUES ('$username', '$email', '$message')";

        if ($conn->query($sql)) {
            $successmessage = "Message sent successfully!";
        } else {
            $failedmessage = "Failed to send message: " . $conn->error;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="css/loginstyle.css"> -->
    <link rel="stylesheet" href="css/contactcss.css">

    <link rel="stylesheet" href="css/navbarstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

</head>
<body class="contactPage">
    <?php include('gu/navbar.php') ?>
    <section class="contactSection">
        <form class="border shadow" method="POST">
            <div class="">
                <div class="col"> 
                    <label>Name</label>
                    <input type="text" name="fullname" class="form-control" placeholder="username" aria-label="First name" >
                </div>
                <div class="col">
                    <label>Email</label>
                    <div class="input-group">
                        <div class="input-group-text">@</div>
                        <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="email@gmail.com" name="email">
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Leave your comments here</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                </div>
            </div>
            <div class="row iframeContainer">
                <p>Where You Can Find Us</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6604.897859337582!2d121.05961701663952!3d14.316517232847676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d7710abd728b%3A0x7325d6ef8227f59a!2sSylvia%E2%80%99s%20Event%20Place%20and%20Resto%20Bar!5e0!3m2!1sen!2sph!4v1771315150510!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col mt-3">
                <button class="btn btn-success" name="submit">Submit</button>
                <p class="text-success"><?php echo $successmessage; ?></p>
                <p class="text-danger"><?php echo $failedmessage; ?></p>
            </div>
        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>