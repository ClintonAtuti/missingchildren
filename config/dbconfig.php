<?php
$servername = $_SERVER['HTTP_HOST'];
$username = "root";
$password = "";
$database="missingchild";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);
$dB_select=  mysqli_select_db($conn,$database);

// Check connection
if (!($conn) OR !($dB_select)) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";


?>