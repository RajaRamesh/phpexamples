<?php
session_start();
if(!isset($_SESSION['uid'])) {
	header("location: login.html");
}
?>
<?php
include('includes/header.php');
?>

My profile
<a href="logout.php"> Log out </a>
<?php
echo $_SESSION['uid'];
?>

<?php
include('includes/footer.php');
?>

