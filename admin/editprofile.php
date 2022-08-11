<?php 
    include_once "../controller/core.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edit Profile</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </head>
    <body class="bg-secondary">
<!--        <div id="layoutAuthentication">-->
<!--            <div id="layoutAuthentication_content">-->
<!--                <main>-->
<!--                    <div class="container">-->
<!--                        <div class="row justify-content-center">-->
<!--                            <div class="col-lg-7">-->
<!--                                <div class="card shadow-lg border-0 rounded-lg mt-5">-->
<!--                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Profile</h3></div>-->
<!--                                    <div class="card-body">-->
<!--                                        <form method="POST" action="#" enctype="multipart/form-data">-->
<!--                                            <div class="row mb-3">-->
<!--                                                <div class="col-md-6">-->
<!--                                                    <div class="form-floating mb-3 mb-md-0">-->
<!--                                                        <input class="form-control" id="inputFirstName" type="text" name="edit_firstname" placeholder="Enter your first name" value="--><?php //echo $_SESSION['firstname'] ?><!--" />-->
<!--                                                        <label for="inputFirstName">First name</label>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                                <div class="col-md-6">-->
<!--                                                    <div class="form-floating">-->
<!--                                                        <input class="form-control" id="inputLastName" type="text" name="edit_lastname" placeholder="Enter your last name" value="--><?php //echo $_SESSION['lastname'] ?><!--"/>-->
<!--                                                        <label for="inputLastName">Last name</label>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="col-md-12 mb-3">-->
<!--                                                <div class="form-floating">-->
<!--                                                    <input class="form-control" id="inputUsername" type="text" name="edit_username" placeholder="Enter your username" value="--><?php //echo $_SESSION['username'] ?><!--"/>-->
<!--                                                    <label for="inputUsername">Username</label>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="col-md-12 mb-3">-->
<!--                                                <div class="form-control">-->
<!--                                                    <label for="avatar">Avatar:&emsp;</label>-->
<!--                                                    <input type="text" disabled value="--><?php //echo $_SESSION['avatar'] ?><!--" >-->
<!--                                                    <input type="file" name="edit_avatar" id="avatar">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="form-floating mb-3">-->
<!--                                                <input class="form-control" id="inputEmail" type="email" name="edit_email" placeholder="name@example.com" value="--><?php //echo $_SESSION['email'] ?><!--"/>-->
<!--                                                <label for="inputEmail">Email address</label>-->
<!--                                            </div>-->
<!--                                            <div class="row mb-3">-->
<!--                                                <div class="col-md-6">-->
<!--                                                    <div class="form-floating mb-3 mb-md-0">-->
<!--                                                        <input class="form-control" id="inputPassword" type="password" name="edit_password" placeholder="Create a password" minlength="5" value="--><?php //echo $_SESSION['password'] ?><!--" />-->
<!--                                                        <label for="inputPassword">Password</label>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="mt-4 mb-0">-->
<!--                                                <div class="d-grid"><input class="btn btn-primary btn-block" type="submit" name="edit_profile" value="Edit Profile"></div>-->
<!--                                            </div>-->
<!--                                        </form>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </main>-->
<!--            </div>-->
<!--            <div id="layoutAuthentication_footer">-->
<!--                <footer class="py-4 bg-light mt-auto">-->
<!--                    <div class="container-fluid px-4">-->
<!--                        <div class="d-flex align-items-center justify-content-between small">-->
<!--                            <div class="text-muted">Copyright &copy; Team-C the best team in the world</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </footer>-->
<!--            </div>-->
<!--        </div>-->


<!-- Wrapper -->
<div class="content-wrapper" style="margin-top: 35px;">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h4 class="card-header">Profile Details</h4>
                    <!-- Account -->
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <!-- Show Picture -->
                            <img src="../assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded" id="uploadedAvatar" width="100" height="100">
                            <div class="button-wrapper">
                                <!-- Upload Input-->
                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                    <span class="d-none d-sm-block">Upload new photo</span>
                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                    <input type="file" id="upload" class="account-file-input" accept="image/png, image/jpeg" hidden="">
                                </label>
                                <!--Reset Button -->
                                <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                    <i class="bx bx-reset d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Reset</span>
                                </button>
                                <p class="text-muted mb-0">Allowed JPG, GIF or PNG.</p>
                            </div>
                        </div>
                    </div>
                    <hr class="my-0">
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST" onsubmit="return false">
                            <div class="row">
                                <!-- First Name -->
                                <div class="mb-3 col-md-6">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input class="form-control" type="text" id="firstName" name="firstName">
                                </div>
                                <!-- Last Name -->
                                <div class="mb-3 col-md-6">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input class="form-control" type="text" name="lastName" id="lastName">
                                </div>
                                <!-- Username -->
                                <div class="mb-3 col-md-6">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username">
                                </div>
                                <!-- Email Name -->
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input class="form-control" type="text" id="email" name="email">
                                </div>
                                <!--Password -->
                                <div class="mb-3 col-md-6">
                                    <label for="Password" class="form-label">Password</label>
                                    <input type="text" class="form-control" id="Password" name="password">
                                </div>
                                <!-- Level -->
                                <div class="mb-3 col-md-6">
                                    <label for="level" class="form-label">Level</label>
                                    <input class="form-control" type="text" id="level" name="level" disabled>
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <!-- End Account -->
                    <div id="layoutAuthentication_footer">
                        <footer class="py-4 bg-light mt-auto">
                            <div class="container-fluid px-4">
                                <div class="d-flex align-items-center justify-content-between small">
                                    <div class="text-muted">Copyright &copy; <b>Team-C</b> the best team in the world  ❤</div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
                </div>
    <!-- End Content Section -->
</div>

        <!-- Errors messages -->
       <!--  <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "nameAlreadyExist") {
                    echo '<script>alert("This username already exist.\\nPlease select another username.")</script>';
                } else if ($_GET['error'] == "emailAlreadyExist") {
                    echo '<script>alert("This email already exist.\\nPlease enter a different email.")</script>';
                }
            }
        ?> -->
    </body>
</html>