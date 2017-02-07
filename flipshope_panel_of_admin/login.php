<?php
include_once 'db_connection.php';
if(isset($_POST['username']) && isset($_POST['password']))
{
session_start();
$_SESSION['key']="admin_panel";
$username=$_POST['username'];
$password=$_POST['password'];
$username=mysqli_escape_string($)
}
?>