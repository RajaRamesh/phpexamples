<?php
session_start();
include ('dbconnection.php');


$uname = $_POST['username'];
$password = SHA1($_POST['password']);

$query = "select uid from users where username= '$uname' and password='$password'";

$result = mysqli_query($con, $query);

//print_r($result);
//print $result->num_rows;

//method 1
//if($result->num_rows == 1) {
	//echo "login successful";
//}

$data = mysqli_fetch_array($result);
//print_r($data);
 $uid = $data['uid'];

if($uid) {
	//echo "User login successfully";
	$_SESSION['uid']  = $uid;
	header("location: myprofile.php");
} else
{
	//echo "login failed";
	header('location: login.html?error="1")
}





?>