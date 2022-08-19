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
                    <h4 class="card-header">Add Footer Details</h4>
                    <div class="card-body">
                    	<form method="POST" action="#">
                            <div class="row">
                                <!-- Title -->
                                <div class="mb-3 col-md-6">
                                    <label for="addFooterTitle" class="form-label">Add Title</label>
                                    <input class="form-control" type="text" id="addFooterTitle"
                                           name="addFooterTitle" autocomplete="off" required>
                                </div>
                                <!-- Address -->
                                <div class="mb-3 col-md-3">
                                    <label for="addFooterAddress" class="form-label">Add Address</label>
                                    <input class="form-control" type="text" name="addFooterAddress" id="addFooterAddress" autocomplete="off" required>
                                </div>
                                <!-- Area -->
                                <div class="mb-3 col-md-3">
                                    <label for="addFooterArea" class="form-label">Add Area</label>
                                    <input class="form-control" type="text" name="addFooterArea" id="addFooterArea" autocomplete="off" required>
                                </div>
                                <!-- Telephone -->
                                <div class="mb-3 col-md-6">
                                    <label for="addFooterPhone" class="form-label">Add Telephone</label>
                                    <input class="form-control" type="text" id="addFooterPhone" name="addFooterPhone" maxlength="100" autocomplete="off" required>
                                </div>
                                <!-- Email -->
                                <div class="mb-3 col-md-6">
                                    <label for="addFooterEmail" class="form-label">Add Email</label>
                                    <input type="text" class="form-control" id="addFooterEmail" name="addFooterEmail" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2" name="new_footer">Save changes</button>
                                 <a href="./home.php" class="btn btn-outline-secondary">Cancel</a>
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
		</div>
    </div>
</div>
</body>
</html>