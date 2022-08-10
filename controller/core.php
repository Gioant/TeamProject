<?php 
    session_start();

    include_once "../model/DB_Manager.class.php";
    include_once "../model/Users.class.php";

    $database = new DB_Manager();

    //Action to register a new admin/moderator to the admin panel
    if (isset($_POST['create_account'])) {

        //Holding password and confirm password in variables
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        //Comparing password to see if they match
        if ($password != $confirmPassword) {
             echo ("<script LANGUAGE='JavaScript'>
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
                                "avatar"    => basename($_FILES["avatar"]["name"]),
                                "email"     => $_POST['email'],
                                "password"  => $_POST['password']
                                );

            //Getting the avatar
            $target_directory = "image/"; //The file that is being selected
            $target_file = $target_directory . basename($_FILES["avatar"]["name"]);
            move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);

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

    //Action to login the user inside the admin panel
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $login = $database->login_user($email, $password);
    }

    //Action to logout the user from the admin panel
    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header('Location: login.php');
    }

    //Storing all user inside a session to print them inside the table in the index
    $_SESSION['all_users'] = $database->get_all_users();

    //To upgrade the moderator status to admin status
    if (isset($_GET['action']) && $_GET['action'] == "update") {
        $update_user = $database->update_user();

    }

    //To delete a user from the admin panel and database
    if (isset($_GET['action']) && $_GET['action'] == "delete") {
       $delete_user = $database->delete_user();

    }

?>