<?php
$host ="127.0.0.1";
$name="root";
$pass="admin";
$dbname="fpi";
$con = mysqli_connect($host,$name,$pass) or die ('Unable to connect Database');
mysqli_select_db($con,$dbname);




?>
