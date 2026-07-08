<?php
$con = mysqli_connect("localhost", "root", "", "taxi_db");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}   
?>
