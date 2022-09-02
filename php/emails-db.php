<?php 

// localhost connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emails";

//cpanel connection
// $servername = "localhost";
// $username = "karlsmit_karlsmith";
// $password = "&B2bek(l4sP)";
// $dbname = "karlsmit_emails";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo 'failed';
} elseif($conn) {
    
}