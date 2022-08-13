<?php

    include_once "../controller/core.php";
/*session_start();

include_once "../model/DB_Manager.class.php";
include_once "../model/Users.class.php";*/

//Logout Button
/*if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: index.php');
}*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Profile Page</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/profilestyles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">Admin Panel</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group"></div>
        </form>
        <!-- Navbar-->
        <form method="POST" action="">
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li><input class="dropdown-item" type="submit" name="logout" value="Logout"></li>
                    </ul>
                </li>
            </ul>
        </form>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <?php if (empty($_SESSION['loggedInUser'])) : ?>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="true" aria-controls="pagesCollapseAuth">
                            <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                            Authentication
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collaps show" id="pagesCollapseAuth" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="login.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-sign-in"></i></div>Login
                                </a>
                                <a class="nav-link" href="register.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>Register
                                </a>
                            </nav>
                        </div>
                        <?php endif ?>
                        <?php if (!empty($_SESSION['loggedInUser'])) : ?>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Users
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="profil.php">
                                        <div class="sb-nav-link-icon"><i class="fas fa-id-card"></i></div>
                                        Profile
                                    </a>
                                </nav>
                            </div>
                        <?php endif ?>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Pages
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="home.php">Home</a>
                                <a class="nav-link" href="about.php">About</a>
                                <a class="nav-link" href="contact.php">Contact</a>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="team.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Team
                        </a>
                        <a class="nav-link" href="portfolio.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Portfolio
                        </a>
                        <a class="nav-link" href="services.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Services
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    <?php if (empty($_SESSION['loggedInUser'])) : ?>
                        Start Bootstrap
                    <?php else : ?>
                        <?php echo $_SESSION['loggedInUser']['name'] . " " . $_SESSION['loggedInUser']['lastname'] ?>
                    <?php endif; ?>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Profile</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
                <div style="display: flex; justify-content: center;">
                    <div class="row mb-4">
                        <div class="col-md-4 mb-3" style="width: unset;">
                            <div class="card" style="margin-right: 10px;">
                                <div class="card-body" style="height: 355px;">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="<?php echo "image/" . $_SESSION['loggedInUser']['avatar'] ?>" alt="profile_picture" class="rounded-circle" height="150" width="150">
                                        <div class="mt-3">
                                            <h4><?php echo $_SESSION['loggedInUser']['username'] ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo $_SESSION['loggedInUser']['name'] . " " . $_SESSION['loggedInUser']['lastname'] ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Username</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo $_SESSION['loggedInUser']['username'] ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo $_SESSION['loggedInUser']['email'] ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Avatar</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo $_SESSION['loggedInUser']['avatar'] ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Password</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?php echo $_SESSION['loggedInUser']['password'] ?>
                                    </div>
                                </div>
                                <hr>
                                <form action="" method="POST">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <input type="submit" name="edit" class="btn btn-info" value="Edit Profile">
                                            <!-- <a class="btn btn-info " href="editprofile.php">Edit</a> -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Team-C the best team in the world</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>