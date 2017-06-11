<?php
include('dbcon.php');
/* Execute a prepared statement for single record */

$sth = $con->prepare('select * from users');
//$data = array('2016-02-07', 'M');
$sth->execute();
$red = $sth->fetch();
echo "<pre>";
print_r($red);


?>
