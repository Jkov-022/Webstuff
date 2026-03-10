<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <!-- Styles -->
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <!-- Header  -->
    <header>
        <div class="">
            <a href="dashboard.php" class="btn returnDashboard">Back to Dashboard</a>
        </div>
    </header>
    <!-- Main section -->
    <section class="profileSection">
        <!-- Wrap the whole div -->
        <div class="wrapper">
            <div class="top-section">
                <!-- The left side section for change/update in profile pictures  -->
                <div class="profilePicture border">
                    <div class="topProfile">
                        <img src="" alt="" id="idPic">
                        <h5>Profile Picture</h5>
                        
                    </div>
                    
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile01">
                       
                    </div>
                     <button class="btn btn-primary">Change Photo</button>

                </div>
                <!-- Section Where you can update your profile information -->
                <form class="userProfile border w-100">
                    <h4 class="mt-2">User Profile</h4>
                    <span class="border mt-4"></span>
                    <div class="row g-3 mt-2">
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                            <input type="text" class="form-control" placeholder="Mark" aria-label="First name">
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="0123456789">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="blk-123 lot 123 GMA babal">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div>
                        <button class="btn btn-success">Save Changes</button>
                        <button class="btn btn-secondary">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>    
</body>
</html>