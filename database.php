<?php
$servername = "localhost";
$username = "root"; // Replace this with the corrected username
$password = "";
$database = "aravali";
$connection = mysqli_connect($servername, $username, $password, $database);

if (!$connection) {
    echo "hi you enter";
   
 die("Connection failed: " . mysqli_connect_error());
} else {
    // Perform database operations here
}
?>
