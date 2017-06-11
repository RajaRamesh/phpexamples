<?php
include('dbcon.php');
/* Execute a prepared statement by passing an array of values */

// Method II
$sth = $con->prepare('select * from users where regdate >  ?  and gender = ?');
$sth->execute(array('2016-02-07', 'M'));
$red = $sth->fetchAll();
echo "<pre>";
print_r($red);


?>
