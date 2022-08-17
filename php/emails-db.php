<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emails";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo 'failed';
} elseif($conn) {
    
}