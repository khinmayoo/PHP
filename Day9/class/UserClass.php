<?php

class UserClass
{
    // Refer to database connection
    private $db;

    // Instantiate object with database connection
    public function __construct($db)
    {
        $this->db = $db;
    }

    // Register new users
    public function register($name, $email, $password)
    {
        try {
            // Hash password
            $userHashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Define query to insert values into the users table
            $query = $this->db->prepare("INSERT INTO sample_php.users (name, email, password) VALUES (?, ?, ?)");
	        
            $query->bind_param("sss", $name, $email, $password);

	        // set parameters and execute
	        $name = $name;
	        $email = $email;
            $password = $userHashedPassword;
	        $query->execute();
        } catch (PDOException $e) {
            array_push($errors, $e->getMessage());
        }
    }

    // Log in registered users with either their username or email and their password
    public function login($name, $email, $password)
    {
        try {

            // Define query to select matching values
            $sql = "SELECT id, name, email, password FROM sample_php.users WHERE name = '". $name. "' or email = '". $email . "'";

        	$result = $this->db->query($sql);

            // Check if row is actually returned
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                // Verify hashed password against entered password
                if (password_verify($password, $row['password'])) {
                    // Define session on successful login
                    $_SESSION['user_session'] = $row['id'];
                    return true;
                } else {
                    // Define failure
                    return false;
                }
            }
        } catch (PDOException $e) {
            array_push($errors, $e->getMessage());
        }
    }

    // Check if the user is already logged in
    public function isLogIn()
    {
        // Check if user session has been set
        if (isset($_SESSION['user_session'])) {
            return true;
        }
    }

    // Redirect user
    public function redirect($url)
    {
        header("Location: $url");
    }

    // Log out user
    public function logOut()
    {
        // Destroy and unset active session
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
    }
}