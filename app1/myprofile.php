<?php
session_start();

if(!$_SESSION['uid']) {
	header("location: login.html");
}
?>

My profile
<a href="logout.php"> Log out </a>
<?php
echo $_SESSION['uid'];
?>