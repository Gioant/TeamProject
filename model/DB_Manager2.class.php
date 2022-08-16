<?php
class DB_Manager2 {
    private $db;

    //Connection to the database
    public function __construct()
    {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "admin";

        //try to connect to the database using the provided credentials
        //if the connection works, it will keep the persistence, else it will throw an error
        try {
            $this->db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

            //To see if there is any Mysql errors
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (Exception $e) {
            die("Database Connection Error: " . $e->getMessage());
        }
    }

    /*============================  CHEFS PART  ==================================*/

    //Function to get all the chefs from the database
    public function get_all_chefs()
    {
        $query = $this->db->query("SELECT * FROM chef");
        $array = $query->fetchAll(PDO::FETCH_ASSOC);

        return $array;
    }

    //Function to select all informations of a chef based on his id
    public function chef_info($id)
    {
        $query = $this->db->query("SELECT * FROM chef WHERE id = $id;");
        $chefInfo = $query->fetch(PDO::FETCH_ASSOC);

        return $chefInfo;
    }

    //Function to delete a chef from the admin/moderator table and the database
    public function delete_chef()
    {
        //query to update database
        $query = $this->db->prepare("DELETE FROM chef WHERE id = ?;");
        $result = $query->execute(array($_GET['deleteID']));
    }

    //Function to update the chefs
    public function update_chef($id, $avatar){

        //query to update database
        $query = $this->db->prepare("UPDATE chef SET id= :id, name = :name, lastname = :lastname, avatar = :avatar, poste = :poste, description = :description WHERE id = $id;");

        //check if the $avatar is not in session['chef_pic]'
        if($_SESSION['chef_pic'] != $avatar) {

            //if it isn't user uploaded a new picture
            $result = $query->execute(array(
                "id" 			=> $_GET['updateID'],
                "name" 			=> $_POST['chefFirstName'],
                "lastname" 		=> $_POST['chefLastName'],
                "avatar" 		=> basename($_FILES["chefPic"]["name"]),
                "poste"			=> $_POST['position'],
                "description"	=> $_POST['description']
            ));
        } else {
            //user did not upload picture
            $result = $query->execute(array(
                "id" 			=> $_GET['updateID'],
                "name" 			=> $_POST['chefFirstName'],
                "lastname" 		=> $_POST['chefLastName'],
                "avatar" 		=> $_SESSION['chef_pic'],
                "poste"			=> $_POST['position'],
                "description"	=> $_POST['description']
            ));
        }
        //redirect user with success msg
        if ($result) {
            header("location: team.php?updateSuccess");
        }
    }

    /*========================  END CHEFS PART  ==============================*/


    /*========================  SLIDER - SERVICES PART  ==============================*/

    //Function to select data from the slider table and save into a variable as an array
    public function get_slider() {
        $query = $this->db->query("SELECT * FROM slider");
        $array = $query->fetchAll(PDO::FETCH_ASSOC);
        $sliderObj = new Slider($array);

        return $array;
    }

    //Function to get all the sliders information from the database
    public function get_all_slider()
    {
        $query = $this->db->query("SELECT * FROM slider");
        $array = $query->fetchAll(PDO::FETCH_ASSOC);

        return $array;
    }

    //Function to select all informations of a slider based on his id
    public function slider_info($id)
    {
        $query = $this->db->query("SELECT * FROM slider WHERE id = $id;");
        $sliderInfo = $query->fetch(PDO::FETCH_ASSOC);

        return $sliderInfo;
    }

    //Function to delete a slider from the slider table and the database
    public function delete_slider()
    {
        //query to update database
        $query = $this->db->prepare("DELETE FROM slider WHERE id = ?;");
        $result = $query->execute(array($_GET['deleteID']));
    }


    /*========================  END SLIDER - SERVICES PART  ==========================*/


    /*================================  MENU PART  ===================================*/

    //Function to get all the menu information from the database
    public function get_all_menu()
    {
        $query = $this->db->query("SELECT * FROM menu");
        $array = $query->fetchAll(PDO::FETCH_ASSOC);

        return $array;
    }

    //Function to select all informations of a menu based on his id
    public function menu_info($id)
    {
        $query = $this->db->query("SELECT * FROM menu WHERE id = $id;");
        $menuInfo = $query->fetch(PDO::FETCH_ASSOC);

        return $menuInfo;
    }

    //Function to delete a menu from the menu table and the database
    public function delete_menu()
    {
        //query to update database
        $query = $this->db->prepare("DELETE FROM menu WHERE id = ?;");
        $result = $query->execute(array($_GET['deleteID']));
    }

    /*=============================== END MENU PART  =================================*/


    /*==============================  CONTACT PART  ==================================*/

    //Function to select data from the contact table and save into a variable as an array
    public function get_contact() {
        $query = $this->db->query("SELECT * FROM contact");
        $array = $query->fetchAll(PDO::FETCH_ASSOC);
        $contactObj = new Contact($array);

        return $array;
    }

    //Function to get all the contact information from the database
    public function get_all_contact()
    {
        $query = $this->db->query("SELECT * FROM contact");
        $array = $query->fetchAll(PDO::FETCH_ASSOC);

        return $array;
    }

    //Function to select all informations of a contact based on his id
    public function contact_info($id)
    {
        $query = $this->db->query("SELECT * FROM contact WHERE id = $id;");
        $contactInfo = $query->fetch(PDO::FETCH_ASSOC);

        return $contactInfo;
    }

    //Function to delete a contact from the menu table and the database
    public function delete_contact()
    {
        //query to update database
        $query = $this->db->prepare("DELETE FROM contact WHERE id = ?;");
        $result = $query->execute(array($_GET['deleteID']));
    }

    /*============================  END CONTACT PART  =================================*/


    /*================================  ABOUT PART  ===================================*/

    public function get_about() {
        $query = $this->db->query("SELECT * FROM about");
        $array = $query->fetchAll(PDO::FETCH_ASSOC);
        $aboutObj = new About($array);

        return $array;
    }

    //Function to get all the about information from the database
    public function get_all_about()
    {
        $query = $this->db->query("SELECT * FROM about");
        $array = $query->fetchAll(PDO::FETCH_ASSOC);

        return $array;
    }

    //Function to select all about informations based on his id
    public function about_info($id)
    {
        $query = $this->db->query("SELECT * FROM about WHERE id = $id;");
        $aboutInfo = $query->fetch(PDO::FETCH_ASSOC);

        return $aboutInfo;
    }

    //Function to delete an about information from the menu table and the database
    public function delete_about()
    {
        //query to update database
        $query = $this->db->prepare("DELETE FROM about WHERE id = ?;");
        $result = $query->execute(array($_GET['deleteID']));
    }

    /*================================  END ABOUT PART  ================================*/
}
