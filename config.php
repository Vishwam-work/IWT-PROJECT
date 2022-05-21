<?php

$conn =mysqli_connect('localhost','root','','userdb');

if (!$conn) {
	echo "Connection failed!";
	exit();
}
?>