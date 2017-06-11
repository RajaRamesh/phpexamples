<?php
include('dbcon.php');
//print_r($_POST);

// 4 insert methods using PDO method


$uname = $_POST['uname'];
$pswd = $_POST['pswd'];
$cpswd = $_POST['cpswd'];
$mail = $_POST['mail'];
$gender = $_POST['gender'];
$regdate = $_POST['regdate'];

$hobbies = implode(', ', $_POST['hobbies']);

if($pswd == $cpswd) {
	$pwd = MD5($pswd);
}

//
//Method I:
/*
$query = "INSERT INTO users (uname, password, email, gender, regdate, status, hobbies) VALUES ('$uname','$pwd', '$mail', '$gender', '$regdate',0, '$hobbies')";

$result = $con->exec($query);
*/
//Method II
/*
$sql = $con->prepare ("INSERT INTO users (uname, password, email, gender, regdate, status, hobbies) VALUES ('$uname','$pwd', '$mail', '$gender', '$regdate',0, '$hobbies')");

$result = $sql->execute();
*/

//method III
/*
$sql = $con->prepare ("INSERT INTO users (uname, password, email, gender, regdate, status, hobbies) VALUES (?, ?, ?, ?, ?, ?, ?)");

$data = array($uname,$pwd, $mail, $gender, $regdate, 0, $hobbies);
 //print_r($data);   exit;
$result = $sql->execute($data);
*/

//Method IV:

$sql = $con->prepare ("INSERT INTO users (uname, password, email, gender, regdate, status, hobbies) VALUES (:uname, :pwd, :mail, :gender, :regdate , :status,  :hobbies)");

$data = array('uname' => $uname, 'pwd' => $pwd, 'mail' => $mail,  'gender'=> $gender, 'regdate' => $regdate, 'status' => 0, 'hobbies' => $hobbies);

$result = $sql->execute($data);

if ($result) {
	//echo $uid =  mysqli_insert_id($con);
	$uid = $con->lastInsertId();
	echo "<script> alert('Registration successsful - the user id :: ' + $uid); </script>";
	//header('location: register.html');
}



?>
