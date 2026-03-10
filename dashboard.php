<?php 
// This lets you  stay logged in
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
}else{

}
$fullname = $_SESSION['user'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Styles -->
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <header>
        <div class="headerTitle">
            <h3>Dashboard</h1>
        </div>
        <div class="headerAction">
            <a href="profile.php">Profile</a>
            <a href="logout.php">Logout</a>
        </div>
    </header>

    <section>
        <div class="wrapper">
            <div class="mainSection">
                <div class="headerCaption">
                    <div class="captionTitle">
                        <h1>Welcome, <?php echo $fullname; ?>!</h1>
                    </div>
                    <div class="captionBtn">
                        <!-- button to pop-out modal -->
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#addUserModal">Add New User</button>
                        <!-- Modal for adding users -->
                        <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="modalContent">
                                            <input class="form-control" id="exampleFormControlInput1" placeholder="Full name">
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Username@example.com">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Admin">
                                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="#">Admin</a></li>
                                                    <li><a class="dropdown-item" href="#">Client</a></li>
                                                    <li><a class="dropdown-item" href="#">Staff</a></li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item" href="#">Super Admin</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Main Table -->
                <div class="mainSectionTable">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Full name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>asdkjhasd@gmail.com</td>
                                <td>Admin</td>
                                <td><button id="statCol">Active</button></td>
                                <td>
                                    <button class="editBtn" data-bs-toggle="modal" data-bs-target="#editUserModal">Edit</button>
                                    <button class="deleteBtn" data-bs-toggle="modal" data-bs-target="#deleteUserModal">Delete</button>
                                </td>
                                <!-- Modal for Edit and Delete -->
                                <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit User</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="modalContent">
                                                    <input class="form-control" id="exampleFormControlInput1" placeholder="Mark">
                                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="asdkjhasd@gmail.com">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Admin">
                                                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Admin</a></li>
                                                            <li><a class="dropdown-item" href="#">Client</a></li>
                                                            <li><a class="dropdown-item" href="#">Staff</a></li>
                                                            <li><hr class="dropdown-divider"></li>
                                                            <li><a class="dropdown-item" href="#">Super Admin</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-warning">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="modalContent deleteModal">
                                                    <div>Are you sure you want to delete this user?</div>
                                                    <div class="btnContainer">
                                                        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                        <button class="btn btn-danger" data-bs-dismiss="modal">Confirm Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>