<?php
include("includes/connections.php"); //Establishing connection with our database
session_start();
$user_check=$_SESSION['username'];
 
$sql = mysqli_query($con,"SELECT username FROM user WHERE username='$user_check' ");
 
$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
 
$login_user=$row['username'];
 
if(!isset($user_check))
{
header("Location: index.php");
}
?>