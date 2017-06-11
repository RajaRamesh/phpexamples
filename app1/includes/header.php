<?php
@session_start();
?>
<html>
<head>
<title> Demo Application </title>
<link href="css/style.css" rel="stylesheet" />
</head>
<body>
<header>
<div class="menu">
<a href="index.php"> Home </a> |  
<?php
if(isset($_SESSION['uid'])) {
echo ' <a href="myprofile.php"> My Profile </a> | <a href="logout.php"> Log out </a>';
} else {
echo ' <a href="registration.html"> Register </a> | <a href="login.html"> Login </a>';
}
?>
</div>
<div class="banner">
<img src="images/banner.png" >
</div> 
</header>