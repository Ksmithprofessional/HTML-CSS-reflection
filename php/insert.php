<?php 

include 'emails-db.php';

    if(isset($_POST['submit'])) {


        // filter input, escape output!
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $company = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_STRING);
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
        $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
        $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

        if(isset($_POST["marketing"])) {

            $marketing = 'on';
        } else {

            $marketing = 'off';
        }; 

        if(!isset($subject)) {
        
            $sql = "INSERT INTO emails (full_name, email_address, marketing) VALUES ('$name', '$email', '$marketing')";
            if (mysqli_query($conn, $sql)) {
                echo "<p class='email-success'>Thank you for signing up for the newsletter!</p>";
                var_dump($name);
                } else {
                echo "Error: " . $sql . ":-" . mysqli_error($conn);
                }
        
            $conn->close();

        } else {

            $sql = "INSERT INTO queries (name, company, email_address, phone_no, subject, message, marketing) VALUES ('$name', '$company', '$email', '$phone', '$subject', '$message', '$marketing')";
            if (mysqli_query($conn, $sql)) {
                
                } else {
                echo "Error: " . $sql . ":-" . mysqli_error($conn);
                }
        
            $conn->close();

        }
    }
