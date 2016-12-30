<?php
// login_fuse.php
// Created by Rudy Martin @realrudymartin@gmail.com for Catalina Sample Review
// check that form has proper hidden fields
// var_dump($_POST);

// CONNECT TO DB
define('DB_HOST','localhost');
define('DB_NAME','test'); //name of database
define('DB_USER','root'); //mysql user
define('DB_PASSWORD',''); //mysql password

$con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(mysqli_connect_error());
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
}
$db = mysqli_select_db($con,DB_NAME) or die(mysqli_connect_error()); 

// READ VALUES - NOTE THESE VALUES ARE NOT SCRUBBED
$username = $_POST['uid'];
$password = $_POST['upass'];
$fuseaction = $_POST['fuseaction'];

// BEGIN LOGIN FUNCTION
function login($username, $password) {
    $userpass = sha1($password);
    $result = mysqli_query($con, "SELECT * FROM members WHERE username='$username' AND password='$userpass'");
    while($row = mysqli_fetch_array($result)) {
        $success = true;
    }
    if($success == true) {
        echo 'Success!';
    } else {
        echo '<div class="alert alert-danger">Incorrect inputs. It looks like your username and/or password are incorrect. Please try again.</div>';
    }
} // END LOGIN FUNCTION

// BEGIN REGISTER FUNCTION
function register($username, $password) {
    $userpass = sha1($password);

    // Check if Username Exists
    $result = mysqli_query($con,"SELECT * FROM members WHERE username='$username'");
    while($row = mysqli_fetch_array($result)) {
        $userexist = 1;
    }
    if($userexist > 0) {
        echo '<div class="alert alert-danger">Sorry, it looks like that username is already taken.</div>';
    } else {
        $newmember = "INSERT INTO members SET username='$username', password='$userpass'";
        if(mysqli_query($con,$newmember)) {
            echo '<div class="alert alert-success">Congrats! You can now log in using your username and password</div>';
        }
    }
} // END REGISTER FUNCTION


// BEGIN MANUAL FUNCTION
function manual($username, $password) {
     if ($username = "123" || $password = "123"){
			echo '<div class="alert alert-success">Congrats! You can now log in using your username and password</div>';
       } else {	
       	  	echo '<div class="alert alert-danger">Sorry, it looks like that username/password combination does not exist.</div>';
     }  
} // END MANUAL FUNCTION

// NOTE fuseaction is lower case state! This only all gives access does not update/remove logins
switch ($fuseaction)
{
    case login:
    	login($username, $password)
		exit();
    case register:
		register($username, $password)
		exit();
	case manual:
		manual($username, $password)
    break;
}

?>