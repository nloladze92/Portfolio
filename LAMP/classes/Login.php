<?php

include 'check.php';

/**
 * Class login
 * handles the user's login and logout process
 */
class Login
{
    /**
     * @var object The database connection
     */
    private $db_connection = null;
    /**
     * @var array Collection of error messages
     */
    public $errors = array();
    /**
     * @var array Collection of success / neutral messages
     */
    public $messages = array();
	
	public $loginattemptupdate;
	
	
    /**
     * the function "__construct()" automatically starts whenever an object of this class is created,
     * you know, when you do "$login = new Login();"
     */
    public function __construct()
    {
        // create/read session, absolutely necessary
        session_start();

        // check the possible login actions:
        // if user tried to log out (happen when user clicks logout button)
        if (isset($_GET["logout"])) {
            $this->doLogout();
        }
        // login via post data (if user just submitted a login form)
        elseif (isset($_POST["login"])) {
            $this->dologinWithPostData();
        }
    }

    /**
     * log in with post data
     */
    private function dologinWithPostData()
    {
        // check login form contents
        if (empty($_POST['user_name'])) {
            $this->errors[] = "Username field was empty.";
			echo '<script type="text/javascript">alert("Username field was empty.");</script>'; 
			
        } elseif (empty($_POST['user_password'])) {
            $this->errors[] = "Password field was empty.";
			echo '<script type="text/javascript">alert("Password field was empty.");</script>'; 
			
        } elseif (!empty($_POST['user_name']) && !empty($_POST['user_password'])) {
            // create a database connection, using the constants from config/db.php (which we loaded in index.php)
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
				
            // change character set to utf8 and check it
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }

            // if no connection errors (= working database connection)
            if (!$this->db_connection->connect_errno) {
				
				// 1. Set the username
				 $user_name = $this->db_connection->real_escape_string($_POST['user_name']);
				 
				 // 2. Select the time until the user can login and see if it's alright to check login credentials
				$checktime = "SELECT unlocktime FROM `nloladze_userdb`.`users` 
				WHERE user_name = '" . $user_name . "' OR user_email = '" . $user_name . "'";
				$counttime = $this->db_connection->query($checktime);
				
				 //check the time
				 if ($counttime == 0) {
					 $okay = true; 
				 } elseif (time() < $counttime) {
					$this->errors[] = "You've entered incorrect credentials to login, please wait to enter information (five minutes in total).";
					echo '<script type="text/javascript">alert("You have entered incorrect credentials to login, please wait to enter information (five minutes in total).");</script>'; 
				 	$okay = false;
				} elseif (time() >= $counttime) {
					$okay = true;
					//change the number of login attemps to 0
					 $loginattemptupdate = "UPDATE `nloladze_userdb`.`users` SET loginattempts = 0
					WHERE user_name = '" . $user_name . "' OR user_email = '" . $user_name . "'";
					$this->db_connection->query($loginattemptupdate);
					//change the number of time to 0
					 $loginattemptupdate = "UPDATE `nloladze_userdb`.`users` SET unlocktime = 0
					WHERE user_name = '" . $user_name . "' OR user_email = '" . $user_name . "'";
					$this->db_connection->query($loginattemptupdate);
				}
				
				 
				 if ($okay == true) {
					
					$array = checklogin($user_name);
					
					//now check the login attempts
					if ($array[0] == false) {
						
					$duration = (5 * 60);
					$unlocktime = time() + $duration;
					
					$timesql = "UPDATE `nloladze_userdb`.`users` SET unlocktime = '" . $unlocktime . "' 
					WHERE user_name = '" . $user_name . "' OR user_email = '" . $user_name . "'";
					$this->db_connection->query($timesql);
					
					$this->errors[] = "You've failed to enter the correct information three times, please try again in five minutes.";
					echo '<script type="text/javascript">alert("You have failed to enter the correct information three times, please try again in five minutes.");</script>'; 
					
					// If the attempted number of logins is less than three and the time is less than five minutes
					} else {
						
						// database query, getting all the info of the selected user (allows login via email address in the
                		// username field)
                		$sql = "SELECT user_name, user_email, user_password_hash
                        FROM users
                        WHERE user_name = '" . $user_name . "' OR user_email = '" . $user_name . "';";
                		$result_of_login_check = $this->db_connection->query($sql);
				
						 if ($result_of_login_check->num_rows == 1) {
					 		// get result row (as an object)
													
                    				$result_row = $result_of_login_check->fetch_object();
									
									if (password_verify($_POST['user_password'], $result_row->user_password_hash)) {
                        			// write user data into PHP SESSION (a file on your server)
                       		 		$_SESSION['user_name'] = $result_row->user_name;
                        			$_SESSION['user_email'] = $result_row->user_email;
                        			$_SESSION['user_login_status'] = 1;
									$_SESSION['value'] = 1;
									} else {	
									
									$login = ($array[1] + 1);
									
									$updatelogins =
									"INSERT INTO `nloladze_userdb`.`users` (loginattempts) VALUES(loginattempts + 1)";
									$this->db_connection->query($updatelogins);
									
								 	$this->errors[] = "You have entered the wrong password.";
								 	echo '<script type="text/javascript">alert("You have entered the wrong password.");</script>';
							 		} // End of checking the user password credentials
									
									
							 } else {
                    			$this->errors[] = "This user does not exist.";
								echo '<script type="text/javascript">alert("This user does not exist.");</script>';
                			} // End of checking if the username exists
					
				 } // End of checking if the login attempts was under 3
				 
				 } // End of checking if the time is okay

				 } else {
                $this->errors[] = "Database connection problem.";
				echo '<script type="text/javascript">alert("Sorry, there was a database connection problem. Try logging back in later.");</script>'; 
            	} // End of checking if the database connection is okay
        } // End of changing the server code to UTF-8
   } // End of the function
	

    /**
     * perform the logout
     */
    public function doLogout()
    {
        // delete the session of the user
		 $_SESSION['user_login_status'] == 0;
		 $_SESSION['value'] = 10;
		 $_SESSION['user_name'] = "";
        $_SESSION = array();
        session_destroy();
        // return a little feeedback message
        $this->messages[] = "You have been logged out.";
    }

    /**
     * simply return the current state of the user's login
     * @return boolean user's login status
     */
    public function isUserLoggedIn()
    {
        if (isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] == 1) {
            return true;
        }
        // default return
        return false;
    }
	
} // End of the login class
