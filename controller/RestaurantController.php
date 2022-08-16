<?php
//function to load required model classes
spl_autoload_register(function ($class_name) {
    $filename = $class_name . '.class.php';
    include_once '../model/' . $filename;
});

session_start();
$database2 = new DB_Manager2();

//Action to logout the user from the admin panel
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('Location: login.php');
}

//Storing all user inside a session to print them inside the table in the index
$_SESSION['all_chefs'] = $database2->get_all_chefs();

//Storing all slider info inside a session to print them inside the table in the index
$_SESSION['all_slider'] = $database2->get_all_slider();

//Storing all menu info inside a session to print them inside the table in the index
$_SESSION['all_menu'] = $database2->get_all_menu();

//Storing all contact info inside a session to print them inside the table in the index
$_SESSION['all_contact'] = $database2->get_all_contact();

//Storing all about info inside a session to print them inside the table in the index
$_SESSION['all_about'] = $database2->get_all_about();


//To delete a chef from the admin panel and database
if(isset($_GET['deleteID'])){
    $database2->delete_chef();
}


//check if chef is on edit profile page by clicking update button from team.php
if (strpos($_SERVER['REQUEST_URI'], '/editchef.php?updateID') !== false) {
    //Get ID from url
    $id = $_GET['updateID'];

    //get data from ID of chef
    $edit_chef = $database2->chef_info($id);

    //store avatar into session
    $_SESSION['chef_pic'] = $edit_chef['avatar'];

    //store remaining properties of chef into unique sessions
    // to autofill form inputs
    $_SESSION['chefFirstName'] = $edit_chef['name'];
    $_SESSION['chefLastName'] = $edit_chef['lastname'];
    $_SESSION['position'] = $edit_chef['poste'];
    $_SESSION['description'] = $edit_chef['description'];


    // ==================== Edit Chef profile part ===============================
    if (isset($_POST['edit_chef'])) {
        //save all form inputs
        $chef_name = $_POST['chefFirstName'];
        $chef_lastname = $_POST['chefLastName'];
        $chef_position = $_POST['position'];
        $chef_description = $_POST['description'];
        $chef_avatar = basename($_FILES["chefPic"]["name"]);

        if(!empty($chef_avatar)){
            //move uploaded picture to folderr
            $target_directory = "../Restaurantly/assets/img/chefs";
            $target_file = $target_directory . basename($_FILES["chefPic"]["name"]);
            move_uploaded_file($_FILES["chefPic"]["tmp_name"], $target_file);

            //call function to update user
            $database2->update_chef($id, $chef_avatar);

        } else {
            $chef_avatar = $_SESSION['chef_pic'];
            $database2->update_chef($id, $chef_avatar);
        }

    }
    //if user manually entered to go to edit chef profile page
} else if (strpos($_SERVER['REQUEST_URI'], '/editchef.php'))  {
    //user did not click update button.. alert user and redirect them
    echo '<script>alert("Error! You Did Not click Update Button.. Redirecting you")</script>';
    header( "Refresh:0.25; url=http://localhost/TeamProject/admin/index.php");
}


