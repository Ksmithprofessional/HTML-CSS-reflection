<?php 

include 'emails-db.php';

    if(isset($_POST['submit'])) {


        // filter input, escape output!
        $name = $_POST['name'];
        $email = $_POST['email'];

        if(isset($_POST["marketing"])) {

            $marketing = 'on';
        } else {

            $marketing = 'off';
        }; 
    
        $sql = "INSERT INTO emails (full_name, email_address, marketing) VALUES ('$name', '$email', '$marketing')";
        if (mysqli_query($conn, $sql)) {
            echo "<p class='email-success'>Thank you for signing up for the newsletter!</p>";
            } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
            }
    
        $conn->close();
    }
