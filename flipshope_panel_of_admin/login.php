<?php
if(isset($_POST['username']) && isset($_POST['password']))
{
session_start();
$_SESSION['key']="";
}
?>