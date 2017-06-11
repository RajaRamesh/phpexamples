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

<?php
include('includes/footer.php');
?>