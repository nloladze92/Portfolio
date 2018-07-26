<?php

/**
 * Class registration
 * handles the user registration
 */
class Registration

{
    /**
     * @var object $db_connection The database connection
     */
	 
    private $db_connection = null;

    /**
     * @var array $errors Collection of error messages
     */
    public $errors = array();
    /**
     * @var array $messages Collection of success / neutral messages
     */
    public $messages = array();

    /**
     * the function "__construct()" automatically starts whenever an object of this class is created,
     * you know, when you do "$registration = new Registration();"
     */
    public function __construct()
    {
        if (isset($_POST["register"])) {
			session_start();
			ob_start(); 
            $this->registerNewUser();
			
        }
    }

    /**
     * handles the entire registration process. checks all error possibilities
     * and creates a new user in the database if everything is fine
     */
    private function registerNewUser()
    {
		
		/*
		require_once('recaptchalib.php');
		
		$privatekey = "6Lf6UfoSAAAAAHaFJSJpltomIHQJ-L4_W8QQHMe3";
		
		  $resp = recaptcha_check_answer ($privatekey,
                                 $_SERVER["REMOTE_ADDR"],
                                 $_POST["recaptcha_challenge_field"],
                                 $_POST["recaptcha_response_field"]);
							
								 
					$drop = $_POST['drop_1'];
					$tier_two = $_POST['tier_two'];
					$city = $tier_two . ", " . $drop;
					
					*/
								 
								 
		
        if (empty($_POST['user_name'])) {
            $this->errors[] = "Empty Username";
			echo '<script type="text/javascript">alert("Username field was empty.");</script>'; 

			
        } elseif (empty($_POST['user_password_new']) || empty($_POST['user_password_repeat'])) {
            $this->errors[] = "Empty Password";
			echo '<script type="text/javascript">alert("Password field was empty.");</script>'; 

			
        } elseif ($_POST['user_password_new'] !== $_POST['user_password_repeat']) {
            $this->errors[] = "Password and password repeat are not the same";
			echo '<script type="text/javascript">alert("Password and password repeat are not the same. Sorry, you have to retype all of it.");</script>'; 

			
        } elseif (strlen($_POST['user_password_new']) < 6) {
            $this->errors[] = "Password has a minimum length of 6 characters";
			echo '<script type="text/javascript">alert("Password has a minimum length of 6 characters");</script>';
			
        } elseif (strlen($_POST['user_name']) > 64 || strlen($_POST['user_name']) < 2) {
            $this->errors[] = "Username cannot be shorter than 2 or longer than 64 characters";
			echo '<script type="text/javascript">alert("Username cannot be shorter than 2 or longer than 64 characters");</script>';
			
        } elseif (!preg_match('/^[a-z\d]{2,64}$/i', $_POST['user_name'])) {
            $this->errors[] = "Username does not fit the name scheme: only a-Z and numbers are allowed, 2 to 64 characters";
			echo '<script type="text/javascript">alert("Username does not fit the name scheme: only a-Z and numbers are allowed, 2 to 64 characters");</script>';
			/*
		}
		 elseif (!$resp->is_valid) {
   // What happens when the CAPTCHA was entered incorrectly
    $this->errors[] = "The CAPTCHA wasn't entered correctly. Go back and try it again.";
			echo '<script type="text/javascript">alert("The CAPTCHA was not entered correctly. Go back and try it again.");</script>';
			
			*/
			
        } elseif (empty($_POST['user_email'])) {
            $this->errors[] = "Email cannot be empty";
			echo '<script type="text/javascript">alert("Email cannot be empty");</script>';
			
        } elseif (strlen($_POST['user_email']) > 64) {
            $this->errors[] = "Email cannot be longer than 64 characters";
			echo '<script type="text/javascript">alert("Email cannot be longer than 64 characters");</script>';
			
        } elseif (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors[] = "Your email address is not in a valid email format";
			echo '<script type="text/javascript">alert("Your email address is not in a valid email format");</script>';
			
        } elseif (!empty($_POST['user_name'])
            && strlen($_POST['user_name']) <= 64
            && strlen($_POST['user_name']) >= 2
            && preg_match('/^[a-z\d]{2,64}$/i', $_POST['user_name'])
            && !empty($_POST['user_email'])
            && strlen($_POST['user_email']) <= 64
            && filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)
            && !empty($_POST['user_password_new'])
            && !empty($_POST['user_password_repeat'])
            && ($_POST['user_password_new'] === $_POST['user_password_repeat'])
			//&& $resp->is_valid
        ) {
            // create a database connection
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // change character set to utf8 and check it
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }

            // if no connection errors (= working database connection)
            if (!$this->db_connection->connect_errno) {

                // escaping, additionally removing everything that could be (html/javascript-) code
                $user_name = $this->db_connection->real_escape_string(strip_tags($_POST['user_name'], ENT_QUOTES));
                $user_email = $this->db_connection->real_escape_string(strip_tags($_POST['user_email'], ENT_QUOTES));

                $user_password = $_POST['user_password_new'];
				
                // crypt the user's password with PHP 5.5's password_hash() function, results in a 60 character
                // hash string. the PASSWORD_DEFAULT constant is defined by the PHP 5.5, or if you are using
                // PHP 5.3/5.4, by the password hashing compatibility library
                $user_password_hash = password_hash($user_password, PASSWORD_DEFAULT);

                // check if user or email address already exists
                $sql = "SELECT * FROM users WHERE user_name = '" . $user_name . "' OR user_email = '" . $user_email . "';";
                $query_check_user_name = $this->db_connection->query($sql);

                if ($query_check_user_name->num_rows == 1) {
                    $this->errors[] = "Sorry, that username / email address is already taken.";
					echo '<script type="text/javascript">alert("Sorry, that username / email address is already taken.");</script>';

					
                } else {


                    // write new user's data into database
                    $sql = "INSERT INTO users (user_name, user_password_hash, user_email, user_city)
                            VALUES('" . $user_name . "', '" . $user_password_hash . "', '" . $user_email . "', '" . $city . "');";
                    $query_new_user_insert = $this->db_connection->query($sql);
					
					

                    // if user has been added successfully
                    if ($query_new_user_insert) {
                        $this->messages[] = "Your account has been created successfully. You can now log in.";
						echo '<script type="text/javascript">alert("Thanks for registering. Your account has been created successfully. Thank you for signing up.");</script>';
						
						$_SESSION['value'] = 1;
					$_SESSION['user_login_status'] = 1;
		 			$_SESSION['user_name'] = $user_name;
					ob_end_clean(); 
    				header("Location: http://spendvow.com/"); 
    				exit; 
						
                    } else {
                        $this->errors[] = "Sorry, your registration failed. Please go back and try again.";
						echo '<script type="text/javascript">alert("Sorry, your registration failed. Please go back and try again.");</script>';
                    }
                }
            } else {
                $this->errors[] = "Sorry, no database connection.";
				echo '<script type="text/javascript">alert("Sorry, no database connection. Try back later.");</script>';

            }
        } else {
            $this->errors[] = "An unknown error occurred.";
			echo '<script type="text/javascript">alert("An unknown error occurred. Try back later.");</script>';

        }
    }
	
	
}
