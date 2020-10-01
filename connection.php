<?php
$mysqli_hostname ="localhost";
$mysqli_user ="root";
$mysqli_password="";
$mysqli_database="opinions";
$conn=mysqli_connect($mysqli_hostname, $mysqli_user, $mysqli_password)or die("Could not connect to database");
mysqli_select_db($conn,"opinions") or die("Could not select database");
?>