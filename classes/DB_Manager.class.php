<?php 
	class DB_Manager {
		private $db;

		//Connection to the database
		public function __construct() {
			$host   = "localhost";
			$user   = "root";
			$pass   = "";
			$dbname = "admin";
			 
			//try to connect to the database using the provided credentials
			//if the connection works, it will keep the persistence, else it will throw an error
			try {
			  $this->db = new PDO( "mysql:host=$host;dbname=$dbname", $user, $pass );

			  //To see if there is any Mysql errors
			  $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			  $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
			}catch (Exception $e){
			  die("Database Connection Error: " . $e->getMessage());
			}
		}

		//Function to add a new character inside the database
		public function add_users($users) {
			$query = $this->db->prepare("INSERT INTO users VALUES 
									   (DEFAULT, :name, :lastname, :username, :email, :password, DEFAULT);");
			$query->execute(array(
								"name" 		=> $users->getName(),
								"lastname" 	=> $users->getLastname(),
								"username"	=> $users->getUsername(),
								"email"		=> $users->getEmail(),
								"password"	=> $users->getPassword()
						));

		}

		//Function to verify if the name already exists inside the database
		public function verify_name($username) {
			$query = $this->db->prepare("SELECT * FROM users WHERE username = :username;");
			$query->execute(array("username" => $_POST['username']));
			//Look if the name already exists inside the database
	    	if ($tableRow = $query->fetch()) {
	    		//if name exists
		        $nameExist = true;
		        $result = true;
		       	header("location: ./register.php?error=nameAlreadyExist");
		        exit();
		    } else {
		        $nameExist = false;
		    }

		}

		//Function to verify if the email already exists inside the database
		public function verify_email($email) {
			$query = $this->db->prepare("SELECT * FROM users WHERE email = :email;");
			$query->execute(array("email" => $_POST['email']));
			//Look if the name already exists inside the database
	    	if ($tableRow = $query->fetch()) {
	    		//if name exists
		        $emailExist = true;
		        $result = true;
		       	header("location: ./register.php?error=emailAlreadyExist");
		        exit();
		    } else {
		        $emailExist = false;
		    }

		}

		//Function to set the user level to 1 if he is an administrator
		public function admin_level($username) {
			$query = $this->db->prepare("UPDATE users SET level = 1 WHERE username = :username;");
			$query->execute(array("username" => $_POST['username']));
		}
	}
?>