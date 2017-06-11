<?php
require("dbconnection.php");
//echo "<pre>"; print_r($_POST); exit;

$uname = strtolower($_POST['username']);
$email = $_POST['email'];
$pwd = SHA1($_POST['pwd']);
//$cpwd = $_POST['cpwd'];
$gender = $_POST['gender'];
$course = implode(', ', $_POST['course']) ;
$city = $_POST['city'];
$regdate = $_POST['regdate'];
$summary = $_POST['summary'];

$query = "insert into users(username, password, email, gender, course, city, summary, regdate) values ('$uname','$pwd','$email','$gender','$course','$city','$summary','$regdate')";

$result = mysqli_query($con, $query);

if($result) {
	//echo "User registration successfully completed";
	header("Location: registration.html?status=1");	
}
else
{
header("Location: registration.html?status=2");
}
?>
