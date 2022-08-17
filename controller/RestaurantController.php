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

//To delete a manu from the admin panel and database
if(isset($_GET['deleteID'])){
    $database2->delete_menu();
}

//To delete about info from the admin panel and database
if(isset($_GET['deleteID'])){
    $database2->delete_about();
}

//To delete a contact info from the admin panel and database
if(isset($_GET['deleteID'])){
    $database2->delete_contact();
}

//To delete a slider info from the admin panel and database
if(isset($_GET['deleteID'])){
    $database2->delete_slider();
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

/*=============================== End of Chef Part ==================================*/


/*=============================== Edit Menu Part ==================================*/

//check if menu dish is on edit profile page by clicking update button from team.php
if (strpos($_SERVER['REQUEST_URI'], '/editmenu.php?updateID') !== false) {
    //Get ID from url
    $id = $_GET['updateID'];

    //get data from ID of menu dish
    $edit_menu = $database2->menu_info($id);

    //store avatar into session
    $_SESSION['menu_pic'] = $edit_menu['picture'];

    //store remaining properties of menu info into unique sessions
    // to autofill form inputs
    $_SESSION['menuName'] = $edit_menu['name'];
    $_SESSION['menuDesc'] = $edit_menu['description'];
    $_SESSION['menuPrice'] = $edit_menu['price'];
    $_SESSION['menuType'] = $edit_menu['type'];


    // ======================= Edit Menu Decription part ===============================
    if (isset($_POST['edit_menu'])) {
        //save all form inputs
        $menu_name = $_POST['menuName'];
        $menu_description = $_POST['menuDesc'];
        $menu_price = $_POST['menuPrice'];
        $menu_avatar = basename($_FILES["menuPic"]["name"]);
        $menu_type = $_POST['menuType'];

        if(!empty($menu_avatar)){
            //move uploaded picture to folderr
            $target_directory = "../Restaurantly/assets/img/menu/";
            $target_file = $target_directory . basename($_FILES["menuPic"]["name"]);
            move_uploaded_file($_FILES["menuPic"]["tmp_name"], $target_file);

            //call function to update user
            $database2->update_menu($id, $menu_avatar);

        } else {
            $menu_avatar = $_SESSION['menu_pic'];
            $database2->update_menu($id, $menu_avatar);
        }

    }
    //if user manually entered to go to edit chef profile page
} else if (strpos($_SERVER['REQUEST_URI'], '/editmenu.php'))  {
    //user did not click update button.. alert user and redirect them
    echo '<script>alert("Error! You Did Not click Update Button.. Redirecting you")</script>';
    header( "Refresh:0.25; url=http://localhost/TeamProject/admin/index.php");
}
/*=============================== End of Menu Part ==================================*/


/*=============================== Edit Slider Part ==================================*/

//check if slider info is on edit profile page by clicking update button from team.php
if (strpos($_SERVER['REQUEST_URI'], '/editservices.php?updateID') !== false) {
    //Get ID from url
    $id = $_GET['updateID'];

    //get data from ID of slider
    $edit_slider = $database2->slider_info($id);

    //store avatar into session
    $_SESSION['slider_pic'] = $edit_slider['picture'];

    //store remaining properties of slider info into unique sessions
    // to autofill form inputs
    $_SESSION['sliderName'] = $edit_slider['title'];
    $_SESSION['sliderPrice'] = $edit_slider['price'];
    $_SESSION['sliderDesc'] = $edit_slider['text'];


    // ======================= Edit Slider Decription part ===============================
    if (isset($_POST['edit_services'])) {
        //save all form inputs
        $slider_name = $_POST['sliderName'];
        $slider_price = $_POST['sliderPrice'];
        $slider_avatar = basename($_FILES["sliderPic"]["name"]);
        $slider_description = $_POST['sliderDesc'];

        if(!empty($slider_avatar)){
            //move uploaded picture to folderr
            $target_directory = "../Restaurantly/assets/img/";
            $target_file = $target_directory . basename($_FILES["sliderPic"]["name"]);
            move_uploaded_file($_FILES["sliderPic"]["tmp_name"], $target_file);

            //call function to update slider
            $database2->update_slider($id, $slider_avatar);

        } else {
            $slider_avatar = $_SESSION['slider_pic'];
            $database2->update_slider($id, $slider_avatar);
        }

    }
    //if user manually entered to go to edit chef profile page
} else if (strpos($_SERVER['REQUEST_URI'], '/editservices.php'))  {
    //user did not click update button.. alert user and redirect them
    echo '<script>alert("Error! You Did Not click Update Button.. Redirecting you")</script>';
    header( "Refresh:0.25; url=http://localhost/TeamProject/admin/index.php");
}

/*=============================== End of Slider Part ==================================*/

/*=============================== Edit About Part ==================================*/

//check if slider info is on edit profile page by clicking update button from team.php
if (strpos($_SERVER['REQUEST_URI'], '/editabout.php?updateID') !== false) {
    //Get ID from url
    $id = $_GET['updateID'];

    //get data from ID of slider
    $edit_about = $database2->about_info($id);

    //store avatar into session
    $_SESSION['about_pic'] = $edit_about['picture'];

    //store remaining properties of slider info into unique sessions
    // to autofill form inputs
    $_SESSION['aboutDesc'] = $edit_about['text'];


    // ======================= Edit About Decription part ===============================
    if (isset($_POST['edit_about'])) {
        //save all form inputs
        $about_description = $_POST['aboutDesc'];
        $about_avatar = basename($_FILES["aboutPic"]["name"]);

        if(!empty($about_avatar)){
            //move uploaded picture to folderr
            $target_directory = "../Restaurantly/assets/img/";
            $target_file = $target_directory . basename($_FILES["aboutPic"]["name"]);
            move_uploaded_file($_FILES["aboutPic"]["tmp_name"], $target_file);

            //call function to update slider
            $database2->update_about($id, $about_avatar);

        } else {
            $about_avatar = $_SESSION['about_pic'];
            $database2->update_about($id, $about_avatar);
        }

    }
    //if user manually entered to go to edit chef profile page
} else if (strpos($_SERVER['REQUEST_URI'], '/editabout.php'))  {
    //user did not click update button.. alert user and redirect them
    echo '<script>alert("Error! You Did Not click Update Button.. Redirecting you")</script>';
    header( "Refresh:0.25; url=http://localhost/TeamProject/admin/index.php");
}

/*=============================== End of About Part ==================================*/


/*=============================== Edit Contact Part ==================================*/

//check if slider info is on edit profile page by clicking update button from team.php
if (strpos($_SERVER['REQUEST_URI'], '/editcontact.php?updateID') !== false) {
    //Get ID from url
    $id = $_GET['updateID'];

    //get data from ID of slider
    $edit_contact = $database2->contact_info($id);

    //store remaining properties of contact info into unique sessions
    // to autofill form inputs
    $_SESSION['contactLocation'] = $edit_contact['location'];
    $_SESSION['contactOpen'] 	 = $edit_contact['open'];
    $_SESSION['contactClose'] 	 = $edit_contact['close'];
    $_SESSION['contactEmail'] 	 = $edit_contact['email'];
    $_SESSION['contactPhone'] 	 = $edit_contact['phone'];


    // ======================= Edit Contact Decription part ===============================
    if (isset($_POST['edit_contact'])) {
        //save all form inputs
        $contact_location = $_POST['contactLocation'];
        $contact_open = $_POST['contactOpen'];
        $contact_close = $_POST['contactClose'];
        $contact_email = $_POST['contactEmail'];
        $contact_phone = $_POST['contactPhone'];

        //call function to update slider
        $database2->update_contact($id);

    }
    //if user manually entered to go to edit chef profile page
} else if (strpos($_SERVER['REQUEST_URI'], '/editcontact.php'))  {
    //user did not click update button.. alert user and redirect them
    echo '<script>alert("Error! You Did Not click Update Button.. Redirecting you")</script>';
    header( "Refresh:0.25; url=http://localhost/TeamProject/admin/index.php");
}

/*=============================== End of Contact Part ==================================*/
