<?php

 $con = mysqli_connect("localhost", "root", "root");
  if (!$con) {
     exit('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
  }

  //set the default client character set 
  mysqli_set_charset($con, 'utf-8');
  mysqli_select_db($con, "credentials");
  $username = mysqli_real_escape_string($con, htmlentities($_GET["username"]));
$userpassword = mysqli_real_escape_string($con, htmlentities($_GET["password"]));
  //$username="Office-Worker-1";
  //$userpassword = "sajith";
  $wisher = mysqli_query($con, "SELECT * FROM `UserAccount` WHERE `UserID` = '$username' AND `Password` = '$userpassword'");
  if (mysqli_num_rows($wisher) < 1) {
     exit("The person " . ($_GET["username"]) . " is not found. Please check the spelling and try again");
  }
  else
	{
		header("Location: http://localhost/PhpProject1/secondpage.php");
	}
  $row = mysqli_fetch_row($wisher);
  $wisherID = $row[0];
  mysqli_free_result($wisher);
  
  
/*session_start();
//require_once('includes.php');

$con = mysqli_connect("localhost", "root", "root");
if (!$con) {
    exit('Connect Error (' . mysqli_connect_errno() . ') '
           . mysqli_connect_error());
}
//set the default client character set 
mysqli_set_charset($con, 'utf-8');


	//Connect to server
	$link = mysql_connect("localhost", "root", "root") or die(mysql_error());
	//Select the database
	mysql_select_db ("credentials");

	// Get the login credentials from user
	$username = $_POST['username'];
	$userpassword = $_POST['password'];	
	
	// Secure the credentials
//	$username = mysql_real_escape_string($_POST['username']);
//	$userpassword = mysql_real_escape_string($_POST['password']);

	// Check the users input against the DB.
	$query = "SELECT * FROM `values` WHERE `UserID` = '$username' AND `Password` = '$userpassword'";
	$result = mysql_query($query) or die ("Unable to verify user because " . mysql_error());
	
	$row = mysql_fetch_assoc($result);
	
	if ($row['total'] == 1)
	{
		$_SESSION['loggedIn'] = "true";
		//header("Location: http://auto.courtesyvending.com/inspection/menu.html");
                echo "<p>Login correct.</p>";
	}
	else
	{
		$_SESSION['loggedIn'] = "false";
		echo "<p>Login failed, username or password incorrect.</p>";
	}
*/

?>
