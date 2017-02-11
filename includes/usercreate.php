<?php
include_once dirname(__FILE__) . '\db_connection.php';
if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['password']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$name=$mysqli->real_escape_string($name);
	$email=$mysqli->real_escape_string($email);
	$password=$mysqli->real_escape_string($password);
	if($mysqli->query("INSERT INTO customer_info (email,name,password) VALUES ('$email','$name','$password')"))
	{	
		echo '<script type="text/javascript">alert("Thanks for choosing Flipshope");
			</script>';
	}
	else
	{
		echo 'Some error occured in data insertion';
	}
	$mysqli->close();
}
?>