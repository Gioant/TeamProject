<?php
include_once "../controller/RestaurantController.php";
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

<!-- Wrapper -->
<div class="content-wrapper" style="margin-top: 35px;">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h4 class="card-header">Add Contact Details</h4>
                    <div class="card-body">
                    	<form method="POST" action="#">
                            <div class="row">
                                <!-- Location -->
                                <div class="mb-3 col-md-6">
                                    <label for="addContactLocation" class="form-label">New Location</label>
                                    <input class="form-control" type="text" id="addContactLocation" name="addContactLocation" autocomplete="off" required>
                                </div>
                                <!-- Opening Hours -->
                                <div class="mb-3 col-md-3">
                                    <label for="addContactOpen" class="form-label">New Opening Hours</label>
                                    <input class="form-control" type="text" name="addContactOpen" id="addContactOpen" autocomplete="off" required>
                                </div>
                                <!-- Closing Hours -->
                                <div class="mb-3 col-md-3">
                                    <label for="addContactClose" class="form-label">New Closing Hours</label>
                                    <input class="form-control" type="text" name="addContactClose" id="addContactClose" autocomplete="off" required>
                                </div>
                                <!-- Email -->
                                <div class="mb-3 col-md-6">
                                    <label for="addContactEmail" class="form-label">New Email</label>
                                    <input type="text" class="form-control" id="addContactEmail" name="addContactEmail" autocomplete="off" required>
                                </div>
                                <!-- Telephone -->
                                <div class="mb-3 col-md-6">
                                    <label for="addContactPhone" class="form-label">New Telephone</label>
                                    <input class="form-control" type="tel" id="addContactPhone" name="addContactPhone" autocomplete="off"
                                           minlength="10" maxlength="12" required>
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2" name="new_contact">+Add</button>
                                 <a href="./contact.php" class="btn btn-outline-secondary">Cancel</a>
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