<?php 
    session_start();

    include "../classes/DB_Manager.class.php";
    include "../classes/Users.class.php";

    $database = new DB_Manager();

    if (isset($_POST['create_account'])) {

        //Holding password and confirm password in variables
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        //Comparing password to see if they match
        if ($password != $confirmPassword) {
             echo ("<script>
                        window.alert('PASSWORD DOESNT MATCH!');
                        window.location.href='http://localhost/TeamProject/admin/register.php';
                   </script>");
        }

        //Function to see if the name already exists inside the database
        $newUser = $_POST['username'];
        $verifyName = $database->verify_name($newUser);

        //Function to see if the email already exists inside the database
        $newEmail = $_POST['email'];
        $verifyEmail = $database->verify_email($newEmail);

        //If the name and email doesn't exist in the database process with the new user creation
        if (!$verifyName && !$verifyEmail) {
            
            //Holding the users entries inside an array
            $newUserDb = array( "name"      => $_POST['firstname'],
                                "lastname"  => $_POST['lastname'],
                                "username"  => $_POST['username'],
                                "email"     => $_POST['email'],
                                "password"  => $_POST['password']
                                );

            //Calling the classes
            $users = new Users($newUserDb);
            $database->add_users($users);

            echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Character sucessfully created!');
                        window.location.href='http://localhost/TeamProject/admin/register.php';
                   </script>");

        }

        //Changing the user level if the checkbox is checked
        if (isset($_POST['admin'])) {
            $username = $_POST['username'];
            $adminLevel = $database->admin_level($username);
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="#">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" name="firstname" placeholder="Enter your first name" required />
                                                        <label for="inputFirstName">First name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" name="lastname" placeholder="Enter your last name" required />
                                                        <label for="inputLastName">Last name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputUsername" type="text" name="username" placeholder="Enter your username" required />
                                                    <label for="inputUsername">Username</label>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" required />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Create a password" minlength="5" required/>
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="password" name="confirmPassword" placeholder="Confirm password"  minlength="5" required/>
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="admin" name="admin" value="admin">
                                                <label class="form-check-label" for="admin">Administrator</label>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><input class="btn btn-primary btn-block" type="submit" name="create_account" value="Create Account"></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-center small">
                            <div class="text-muted">Copyright &copy; Team-C the best team in the world</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <!-- Errors messages -->
        <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "nameAlreadyExist") {
                    echo '<script>alert("This username already exist.\\nPlease select another username.")</script>';
                } else if ($_GET['error'] == "emailAlreadyExist") {
                    echo '<script>alert("This email already exist.\\nPlease enter a different email.")</script>';
                }
            }
        ?>
    </body>
</html>