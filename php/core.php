<?php

include_once "../classes/DB_Manager.class.php";
include_once "../classes/Users.class.php";

    $database = new DB_Manager();
/*
	if (isset($_POST['create_account'])) {

		 if (isset($_POST['create_account'])) {

        //Function to see if the name already exists inside the database
        //$newUser = $_POST['name'];
        //$verifyName = $database->verify_name($newUser);

        //If the name doesn't exist in the database process the character creation
        //if (!$verifyName) {
            //Holding new character name inside a variable

            $newUserDb = array( "name"      => $_POST['firstname'],
                                "lastname"  => $_POST['lastname'],
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

        //}
    	}
	}*/

?>