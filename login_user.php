<?php

include_once("config.php");

$email =  $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * from users where email = '$email'";
$retval = mysql_query( $sql, $link);

if (mysql_num_rows($retval) == 1)
{
	$row = mysql_fetch_array($retval);
	$verify = password_verify($password, $row['password']);
	if($verify)
	{
		$_SESSION['LoggedIn'] = 1;
		$_SESSION['email'] = $email;
		echo "Logged in succesfully";
		echo "We will now redirect you to the members area";
		echo "<meta http-equiv='refresh' content='2; po.php'>";
	}
	else
	{
		$_SESSION['errLogin'] = "Wrong username or password";
		header('Location: login.php');
	}
}
else
{
	$_SESSION['errLogin'] = "No records can be found";
	header('Location: login.php');
}

// 

// echo $verify;

?>